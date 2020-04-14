<link rel="stylesheet" href="./css/schedule.css">

    <div id='schedule'>
        <ul class='schedule_days'>
            <li id="monday" class='actived' onclick="mondayActived()">
                <h5>Lunes</h5>                
            </li>
            <li id="tuesday" class='desactived' onclick="tuesdayActived()">
                <h5>Martes</h5>                
            </li>          
            <li id="wednesday" class='desactived' onclick="wednesdayActived()">
                <h5>Miércoles</h5>                
            </li>          
            <li id="thursday" class='desactived' onclick="thursdayActived()">
                <h5>Jueves</h5>                
            </li>          
            <li id="friday" class='desactived' onclick="fridayActived()">
                <h5>Viernes</h5>                
            </li>          
            <li id="saturday" class='desactived' onclick="saturdayActived()">
                <h5>Sábado</h5>                
            </li>          
            <li id="sunday" class='desactived' onclick="sundayActived()">
                <h5>Domingo</h5>                
            </li>
        </ul>
        <div class='activities' id="info_monday">
        <h2>Lunes</h2>    
        <h3>Actividades</h3>
        </div>
        <div class='activities' id="info_tuesday">
            <h2>Martes</h2>
            <h3>Actividades</h3>
        </div>
        <div class='activities' id="info_wednesday">
            <h2>Miércoles</h2>
            <h3>Actividades</h3>
        </div>
        <div class='activities' id="info_thursday">
            <h2>Jueves</h2>
            <h3>Actividades</h3>
        </div>
        <div class='activities' id="info_friday">
            <h2>Viernes</h2>
            <h3>Actividades</h3>
        </div>
        <div class='activities' id="info_saturday">
            <h2>Sábado</h2>
            <h3>Actividades</h3>
        </div>
        <div class='activities' id="info_sunday">
            <h2>Domingo</h2>
            <h3>Actividades</h3>
        </div>
    </div>

    <script>
            monday = document.getElementById('info_monday');
            tuesday = document.getElementById('info_tuesday');
            wednesday = document.getElementById('info_wednesday');
            thursday = document.getElementById('info_thursday');
            friday = document.getElementById('info_friday');
            saturday = document.getElementById('info_saturday');
            sunday = document.getElementById('info_sunday');

            mondayBtn = document.getElementById('monday');
            tuesdayBtn = document.getElementById('tuesday');
            wednesdayBtn = document.getElementById('wednesday');
            thursdayBtn = document.getElementById('thursday');
            fridayBtn = document.getElementById('friday');
            saturdayBtn = document.getElementById('saturday');
            sundayBtn = document.getElementById('sunday');


            

        function mondayActived() {   
            monday.style.display = 'block';
            mondayBtn.classList.add("actived");
            mondayBtn.classList.remove("desactived");

            tuesday.style.display = 'none';
            tuesdayBtn.classList.add("desactived");
            tuesdayBtn.classList.remove("actived");

            wednesday.style.display = 'none';
            wednesdayBtn.classList.add("desactived");
            wednesdayBtn.classList.remove("actived");

            thursday.style.display = 'none';
            thursdayBtn.classList.add("desactived");
            thursdayBtn.classList.remove("actived");

            friday.style.display = 'none';
            fridayBtn.classList.add("desactived");
            fridayBtn.classList.remove("actived");
            
            saturday.style.display = 'none';
            saturdayBtn.classList.add("desactived");
            saturdayBtn.classList.remove("actived");

            sunday.style.display = 'none';
            sundayBtn.classList.add("desactived");
            sundayBtn.classList.remove("actived");
        };
        function tuesdayActived() {   
            monday.style.display = 'none';
            mondayBtn.classList.add("desactived");
            mondayBtn.classList.remove("actived");

            tuesday.style.display = 'block';
            tuesdayBtn.classList.add("actived");
            tuesdayBtn.classList.remove("desactived");

            wednesday.style.display = 'none';
            wednesdayBtn.classList.add("desactived");
            wednesdayBtn.classList.remove("actived");

            thursday.style.display = 'none';
            thursdayBtn.classList.add("desactived");
            thursdayBtn.classList.remove("actived");

            friday.style.display = 'none';
            fridayBtn.classList.add("desactived");
            fridayBtn.classList.remove("actived");
            
            saturday.style.display = 'none';
            saturdayBtn.classList.add("desactived");
            saturdayBtn.classList.remove("actived");

            sunday.style.display = 'none';
            sundayBtn.classList.add("desactived");
            sundayBtn.classList.remove("actived");
        };
        function wednesdayActived() {   
            monday.style.display = 'none';
            mondayBtn.classList.add("desactived");
            mondayBtn.classList.remove("actived");

            tuesday.style.display = 'none';
            tuesdayBtn.classList.add("desactived");
            tuesdayBtn.classList.remove("actived");

            wednesday.style.display = 'block';
            wednesdayBtn.classList.add("actived");
            wednesdayBtn.classList.remove("desactived");

            thursday.style.display = 'none';
            thursdayBtn.classList.add("desactived");
            thursdayBtn.classList.remove("actived");

            friday.style.display = 'none';
            fridayBtn.classList.add("desactived");
            fridayBtn.classList.remove("actived");
            
            saturday.style.display = 'none';
            saturdayBtn.classList.add("desactived");
            saturdayBtn.classList.remove("actived");

            sunday.style.display = 'none';
            sundayBtn.classList.add("desactived");
            sundayBtn.classList.remove("actived");
        };
        function thursdayActived() {   
            monday.style.display = 'none';
            mondayBtn.classList.add("desactived");
            mondayBtn.classList.remove("actived");

            tuesday.style.display = 'none';
            tuesdayBtn.classList.add("desactived");
            tuesdayBtn.classList.remove("actived");

            wednesday.style.display = 'none';
            wednesdayBtn.classList.add("desactived");
            wednesdayBtn.classList.remove("actived");

            thursday.style.display = 'block';
            thursdayBtn.classList.add("actived");
            thursdayBtn.classList.remove("desactived");

            friday.style.display = 'none';
            fridayBtn.classList.add("desactived");
            fridayBtn.classList.remove("actived");
            
            saturday.style.display = 'none';
            saturdayBtn.classList.add("desactived");
            saturdayBtn.classList.remove("actived");

            sunday.style.display = 'none';
            sundayBtn.classList.add("desactived");
            sundayBtn.classList.remove("actived");
        };
        function fridayActived() {   
            monday.style.display = 'none';
            mondayBtn.classList.add("desactived");
            mondayBtn.classList.remove("actived");

            tuesday.style.display = 'none';
            tuesdayBtn.classList.add("desactived");
            tuesdayBtn.classList.remove("actived");

            wednesday.style.display = 'none';
            wednesdayBtn.classList.add("desactived");
            wednesdayBtn.classList.remove("actived");

            thursday.style.display = 'none';
            thursdayBtn.classList.add("desactived");
            thursdayBtn.classList.remove("actived");

            friday.style.display = 'block';
            fridayBtn.classList.add("actived");
            fridayBtn.classList.remove("desactived");
            
            saturday.style.display = 'none';
            saturdayBtn.classList.add("desactived");
            saturdayBtn.classList.remove("actived");

            sunday.style.display = 'none';
            sundayBtn.classList.add("desactived");
            sundayBtn.classList.remove("actived");
        };
        function saturdayActived() {   
            monday.style.display = 'none';
            mondayBtn.classList.add("desactived");
            mondayBtn.classList.remove("actived");

            tuesday.style.display = 'none';
            tuesdayBtn.classList.add("desactived");
            tuesdayBtn.classList.remove("actived");

            wednesday.style.display = 'none';
            wednesdayBtn.classList.add("desactived");
            wednesdayBtn.classList.remove("actived");

            thursday.style.display = 'none';
            thursdayBtn.classList.add("desactived");
            thursdayBtn.classList.remove("actived");

            friday.style.display = 'none';
            fridayBtn.classList.add("desactived");
            fridayBtn.classList.remove("actived");
            
            saturday.style.display = 'block';
            saturdayBtn.classList.add("actived");
            saturdayBtn.classList.remove("desactived");

            sunday.style.display = 'none';
            sundayBtn.classList.add("desactived");
            sundayBtn.classList.remove("actived");
        };
        function sundayActived() {   
            monday.style.display = 'none';
            mondayBtn.classList.add("desactived");
            mondayBtn.classList.remove("actived");

            tuesday.style.display = 'none';
            tuesdayBtn.classList.add("desactived");
            tuesdayBtn.classList.remove("actived");

            wednesday.style.display = 'none';
            wednesdayBtn.classList.add("desactived");
            wednesdayBtn.classList.remove("actived");

            thursday.style.display = 'none';
            thursdayBtn.classList.add("desactived");
            thursdayBtn.classList.remove("actived");

            friday.style.display = 'none';
            fridayBtn.classList.add("desactived");
            fridayBtn.classList.remove("actived");
            
            saturday.style.display = 'none';
            saturdayBtn.classList.add("desactived");
            saturdayBtn.classList.remove("actived");

            sunday.style.display = 'block';
            sundayBtn.classList.add("actived");
            sundayBtn.classList.remove("desactived");
        };

    </script>