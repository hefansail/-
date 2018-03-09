		


		let datetime = "2018-01-04 00:00:00 - 2018-02-09 00:00:00";
        let startTime = datetime.split(' - ')[0];
        let endTime = datetime.split(' - ')[1];
        start_time=(timecal(startTime))/1000;
        end_time=(timecal(endTime))/1000;
        alert(start_time);