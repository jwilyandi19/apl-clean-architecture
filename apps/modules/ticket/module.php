<?php

namespace App\Ticket;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Phalcon\DiInterface;
use Phalcon\Loader;
use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Volt;
use CleanArch\TicketOnline\UseCase\AddSchedule\AddScheduleUseCase;
use CleanArch\TicketOnline\UseCase\UpdateSchedule\UpdateScheduleUseCase;
use CleanArch\TicketOnline\UseCase\ViewAllSchedule\ViewAllScheduleUseCase;
use CleanArch\TicketOnline\UseCase\FindSchedule\FindScheduleUseCase;
use CleanArch\TicketOnline\UseCase\AddAttendant\AddAttendantUseCase;
use CleanArch\TicketOnline\UseCase\FindAttendant\FindAttendantUseCase;

class Module implements ModuleDefinitionInterface
{
    public function registerAutoloaders(DiInterface $di = null)
    {
        $loader = new Loader();

        $loader->registerNamespaces([
            'App\Ticket\Controllers\Web' => __DIR__ . '/controllers/web',
            'App\Ticket\Controllers\Api' => __DIR__ . '/controllers/api',
            'App\Ticket\Models' => __DIR__ . '/models'
        ]);

        $loader->register();
    }

    public function registerServices(DiInterface $di = null)
    {
        $di['view'] = function () {
            $view = new View();
            $view->setViewsDir(__DIR__ . '/views/');

            $view->registerEngines(
                [
                    ".volt" => "voltService",
                ]
            );

            return $view;
        };

        $di->setShared('entityManager', function() {
            
            $paths = array(__DIR__ . "/../../../core/Persistence/Doctrine/Mapping/");
            $isDevMode = true;
            // the connection configuration
            $dbParams = array(
                'driver'   => 'pdo_mysql',
                'user'     => 'root',
                'password' => '',
                'dbname'   => 'ticketonline',
            );
            $config = Setup::createYAMLMetadataConfiguration($paths, $isDevMode);
            $entityManager = EntityManager::create($dbParams, $config);
            $entityManager->clear();
            return $entityManager;
        });

        $di->setShared('scheduleRepository', function() {
            $entityManager = $this->get('entityManager');
            return new \CleanArch\TicketOnline\Persistence\Doctrine\Repository\ScheduleRepository($entityManager);
        });

        $di->setShared('attendantRepository', function() {
            $entityManager = $this->get('entityManager');
            return new \CleanArch\TicketOnline\Persistence\Doctrine\Repository\AttendantRepository($entityManager);
        });

        $di->set('addScheduleUseCase', function() {
            $scheduleRepository = $this->get('scheduleRepository');
            return new AddScheduleUseCase($scheduleRepository);
        });

        $di->set('updateScheduleUseCase', function() {
            $scheduleRepository = $this->get('scheduleRepository');
            return new UpdateScheduleUseCase($scheduleRepository);
        });

        $di->set('viewAllScheduleUseCase', function() {
            $scheduleRepository = $this->get('scheduleRepository');
            return new ViewAllScheduleUseCase($scheduleRepository);
        });

        $di->set('findScheduleUseCase', function() {
            $scheduleRepository = $this->get('scheduleRepository');
            return new FindScheduleUseCase($scheduleRepository);
        });

        $di->set('addAttendantUseCase', function() {
            $attendantRepository = $this->get('attendantRepository');
            return new AddAttendantUseCase($attendantRepository);
        });

        $di->set('findAttendantUseCase', function() {
            $attendantRepository = $this->get('attendantRepository');
            return new FindAttendantUseCase($attendantRepository);
        });


        $di->set('scheduleService', function() {
            $scheduleRepository = $this->get('scheduleRepository');
            $addScheduleUC = $this->get('addScheduleUseCase');
            $updateScheduleUC = $this->get('updateScheduleUseCase');
            $viewAllScheduleUC = $this->get('viewAllScheduleUseCase');
            $findScheduleUC = $this->get('findScheduleUseCase');

            return new \CleanArch\TicketOnline\Domain\Service\ScheduleService($scheduleRepository, $addScheduleUC,$updateScheduleUC,$viewAllScheduleUC,$findScheduleUC);
        });

        $di->set('attendantService', function() {
            $attendantRepository = $this->get('attendantRepository');
            $addAttendantUC = $this->get('addAttendantUseCase');
            $findAttendantUC = $this->get('findAttendantUseCase');

            return new \CleanArch\TicketOnline\Domain\Service\AttendantService($attendantRepository,$addAttendantUC,$findAttendantUC);
        });

        $di->setShared('jmsSerializer', function() {
            $serializer = \JMS\Serializer\SerializerBuilder::create()->build();
            return $serializer;
        });
        
        $di->setShared('serializer', function() {
            $jmsSerializer = $this->get('jmsSerializer');
            return new \CleanArch\TicketOnline\Presenter\Serializer\JmsSerializer($jmsSerializer);
        });




    }
}