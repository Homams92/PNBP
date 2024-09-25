
  <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Calendar</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/main.min.css" rel="stylesheet">
    <style>
        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div id="calendar"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/main.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [
                    {
                        title: 'Terisi',
                        start: '2024-09-10',
                        backgroundColor: '#ff0000',
                        borderColor: '#ff0000'
                    },
                    {
                        title: 'Terisi',
                        start: '2024-09-15',
                        backgroundColor: '#ff0000',
                        borderColor: '#ff0000'
                    }
                ]
            });
            calendar.render();
        });
    </script>
</body>
</html>
