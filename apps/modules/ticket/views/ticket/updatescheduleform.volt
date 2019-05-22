<form method="POST">
        <div>
            <label>Name</label>
            <input type="text" name="schedulename" value="{{schedule.getScheduleName()}}" required>
        </div>
        <div>
            <label>Day</label>
            <input type="text" name="scheduleday" value="{{schedule.getDay()}}" required>
        </div>
        <div>
            <label>Start Time</label>
            <input type="number" name="starttime" value="{{schedule.getstartTime()}}" required>
        </div>
        <div>
            <label>End Time</label>
            <input type="number" name="endtime" value="{{schedule.getendTime()}}" required>
        </div>
    
        <button type="submit">Submit</button>
    
    </form>