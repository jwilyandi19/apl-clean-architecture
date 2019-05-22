{% for schedule in schedules.getSchedules() %}
<div>ID: {{schedule['schedule_id']}}</div>
<div>Schedule: {{schedule['scheduleName']}}</div>
<div>Day: {{schedule['day']}}</div>
<div>Start Time: {{schedule['startTime']}}</div>
<div>End Time: {{schedule['endTime']}}</div>
{% endfor %}