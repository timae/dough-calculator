<!doctype html>

<head>
    <?php
        //Add analytics code here
        include_once "gtag.txt";
    ?>
	<meta name="description" content="A Pizza-dough calculator">
	<meta name="viewport" content="width=device-width">

    <link rel="shortcut icon" href="">
    <!-- Bootstrap https://getbootstrap.com/docs/5.3/getting-started/introduction/ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Jquery https://jquery.com/ -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 

    <!-- Flatpickr https://flatpickr.js.org/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- dayJS  https://day.js.org/en/ -->
    <script src="https://cdn.jsdelivr.net/npm/dayjs@1/dayjs.min.js"></script>
    <script>dayjs().format()</script>

    <title>Pizza-dough Calculator</title>
</head>

<body>


<div class="container">

    <nav class="navbar bg-primary mb-3" data-bs-theme="dark">
        <div class="container-fluid">
                <a class="navbar-brand" href="/dough-calculator/">Pizza-dough Calculator</a>
                <span class="navbar-text"><a class="nav-link active" href="https://github.com/timae/dough-calculator/commits/main">Version 1.0.230902</a></span>
            </span>
        </div>
    </nav>
<div class="container">
    <!-- Your existing content -->

    <!-- Section for explaining flour and requirements -->
    <div class="row">
        <div class="col">
            <h2>Choosing the Right Flour for Pizza Dough</h2>
            <p>When making pizza dough, the choice of flour is crucial to achieving the desired texture and flavor. 
               Ideally, use high-protein bread flour for a chewy and crispy crust - Your aim should always be to have more then 12g protein in your flour.
		The flour i use most of the time is <a href="https://www.ottos.ch/de/supermarkt-weine/lebensmittel/vorraete/caputo-pizzamehl-pizzeria-typ-00-1-kg/p/324682" target="_blank">Caputo Pizzamehl</a>
		However, you can also experiment with other types of flour, such as Tipo 00, which is known for its fine texture and is commonly used 
               in traditional Neapolitan pizza.</p>
            
            <h2>Other Recommended Requirements:</h2>
            <ul>
                <li>Fresh yeast or instant yeast for leavening.</li>
                <li>Quality water at an appropriate temperature.</li>
                <li>Consider the hydration percentage for the desired dough consistency (See Calculator).</li>
		<li>In case you only have fresh or dried yeast at hand i added you can calculate the equivalent here:.</li>
                <!-- Add more recommendations as needed -->
            </ul>
        </div>
    </div>
<!-- Section for Yeast Calculator -->
    <div class="row" id="yeast-calculator">
        <div class="col">
            <h2>Yeast Calculator</h2>
            <p>Calculating the right amount of yeast is crucial for a successful pizza dough. Here's a simple yeast calculator:</p>

            <div class="input-group mb-3">
                <span class="input-group-text">Fresh Yeast (g)</span>
                <input type="text" id="inputFreshYeast" class="form-control" aria-label="">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Dried Yeast (g)</span>
                <input type="text" id="inputDriedYeast" class="form-control" aria-label="">
            </div>

            <button class="btn btn-primary" onclick="calculateYeast()">Calculate</button>

            <p>The recommended conversion ratio is 1:2 (fresh yeast to dried yeast).</p>

            <h3>Recommended Yeast Amount:</h3>
            <p id="recommendedYeastAmount"></p>
        </div>
    </div>
    
    <!-- The rest of your existing content -->

</div> <!-- container -->

<script>
    function calculateYeast() {
        var freshYeast = parseFloat($("#inputFreshYeast").val()) || 0;
        var driedYeast = freshYeast / 2; // Conversion ratio: 1:2

        $("#inputDriedYeast").val(driedYeast.toFixed(2));

        // You can customize this part based on your calculation needs
        var recommendedAmount = "Use " + driedYeast.toFixed(2) + "g of dried yeast for this recipe.";
        $("#recommendedYeastAmount").text(recommendedAmount);
    }
</script>
    
    <!-- The rest of your existing content -->

</div> <!-- container -->

<!--    <span>
        <span class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="toggleTime" checked>
        <label class="form-check-label" for="toggleTime"><i class="bi bi-clock" alttext="Toggle time controls"></i></label>
    </span>
-->    
    <!-- DateTime Picker -->
    <div class="row g-3 align-items-center timeModule">
        <div class="col-auto">
            <div class="input-group mb-3">
                <span class="input-group-text">Planned Date to Eat</span>
                <input type="text" id="inputDate" class="form-control" aria-label="" value="<?=date("Y-m-d");?>">
                <span class="input-group-text"><i class='bi bi-calendar-week'></i></span>
            </div>
        </div>
        <div class="col-auto">
            <div class="input-group mb-3">
                <span class="input-group-text">Time</i></span>
                <input type="text" id="inputTime" class="form-control" aria-label="" value="<?=date("H")+25;?>">
                <span class="input-group-text"><i class='bi bi-clock'></i></span>
            </div>
        </div>
    </div>

    <div class="row g-3 align-items-center">
        <!-- Portions -->
        <div class="col-auto">
            <div class="input-group mb-3">
            <span class="input-group-text">Portions</span>
            <input type="text" id="inputPortions" class="form-control" aria-label="" value="2">
            <span class="input-group-text">number of balls</span>
            </div>
        </div>

        <!-- Portion size -->
        <div class="col-auto">

            <div class="input-group mb-3">
            <span class="input-group-text">Portion Size</span>
            <input type="text" id="inputPortionSize" class="form-control" aria-label="" value="260">
            <span class="input-group-text">g</span>
            </div>

        </div>

        <!-- Hydration -->
        <div class="col-auto">
            <div class="input-group mb-3">
            <span class="input-group-text">Hydration</span>
            <input type="text" id="inputHydration" class="form-control" aria-label="" value="70">
            <span class="input-group-text">%</span>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="alert alert-warning" id="portion-warning" role="alert">
                The poolish amount of 300:300 is ideal for portions up to 12. For more portions, I recommend splitting the recipe in 2 or more!
            </div>
        </div>
    </div> <!-- row -->

    <div class="row">
    <h2 class="">Final Result:</h2>

        <!-- Total Dough Weight -->
        <div class="col-auto">
            <form class="form-floating font-monospace">
                <input type="text" id="inputTotalDoughWeight" class="form-control" value="" aria-describedby="" disabled readonly>
                <label for="inputTotalDoughWeight" class="col-form-label">Total Dough Weight (g)</label>
            </form>

        </div>

        <!-- Total Flour Weight -->
        <div class="col-auto">
            <form class="form-floating font-monospace">
                <input type="text" id="inputFlour" class="form-control" value="" aria-describedby="" disabled readonly>
                <label for="inputFlour">Total Flour Weight (g)</label>
            </form>
        </div>

        <!-- Total Water -->
        <div class="col-auto">
            <form class="form-floating font-monospace">
                <input type="text" id="inputWater" class="form-control" value="" aria-describedby="" disabled readonly>
                <label for="inputWater">Total Water (g)</label>
            </form>
        </div>

        <!-- Total Salt -->
        <div class="col-auto">
            <form class="form-floating font-monospace">
                <input type="text" id="inputSalt" class="form-control" value="" aria-describedby="" disabled readonly>
                <label for="inputSalt">Total Salt (g)</label>
            </form>
        </div>

    </div> <!-- row -->


    <div class="row">
        <h2 class="gy-5">Step 1 - Make the poolish:</h2>
        <p class="timeModule" id="labelDateTimeToStart"></p>
        <div class="col-auto">
            <form class="form-floating font-monospace">
                <input type="text" id="inputPoolishFlour" class="form-control" value="100" aria-describedby="" disabled readonly>
                <label for="inputPoolishFlour">Flour (g)</label>
            </form>
        </div>
        
        <div class="col-auto">
            <form class="form-floating font-monospace">
                <input type="text" id="inputPoolishWater" class="form-control" value="100" aria-describedby="" disabled readonly>
                <label for="inputPoolishWater">Water (g)</label>
            </form>
        </div>

        <div class="col-auto">
            <form class="form-floating font-monospace">
                <input type="text" id="inputPoolishYeast" class="form-control" value="3" aria-describedby="" disabled readonly>
                <label for="inputPoolishYeast">Instant Yeast (g)</label>
            </form>
        </div>

        <div class="col-auto">
            <form class="form-floating font-monospace">
                <input type="text" id="inputPoolishHoney" class="form-control" value="6" aria-describedby="" disabled readonly>
                <label for="inputPoolishHoney">Honey (g)</label>
            </form>
        </div>
    </div> <!-- row -->

    <div class="row gy-1">
        <div class="col">
            <ul class="list-group">
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="poolish-step1">
                <label class="form-check-label stretched-link" for="poolish-step1">Mix and let sit for 1 hour at room temperature.</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="poolish-step2">
                <label class="form-check-label stretched-link" for="poolish-step2">Refrigerate for 16-24 hrs (until the time below, depending on when you started)</label>
            </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <h2 class="gy-5">Step 2 - Final Mix:</h2>
        <p class="timeModule" id="labelStep2DateTime"></p>

        <ul class="list-group">
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="step2">
                <label class="form-check-label stretched-link" for="step2">Add the following to your fermented poolish, and continue to the final steps</label>
            </li>
        </ul>
    </div>

    <div class="row gy-1">
        <div class="col-auto">
            <form class="form-floating font-monospace">
                <input type="text" id="inputRemainingFlour" class="form-control" value="194" aria-describedby="" disabled readonly>
                <label for="inputRemainingFlour">Flour (g)</label>
            </form>
        </div>

        <div class="col-auto">
            <form class="form-floating font-monospace">
                <input type="text" id="inputRemainingWater" class="form-control" value="106" aria-describedby="" disabled readonly>
                <label for="inputRemainingWater">Water (g)</label>
            </form>
        </div>

        <div class="col-auto">
            <form class="form-floating font-monospace">
                <input type="text" id="inputRemainingSalt" class="form-control" value="9" aria-describedby="" disabled readonly>
                <label for="inputRemainingSalt">Salt (g)</label>
            </form>
        </div>
    </div> <!-- row -->


    <div class="row">
        <h2 class="gy-5">Final Steps:</h2>
        <div class="col">
            <ul class="list-group">
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="final-step1">
                <label class="form-check-label stretched-link" for="final-step1">Mix all together by hand or mixer</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="final-step2">
                <label class="form-check-label stretched-link" for="final-step2">Cover and let rest for 20-30 minutes (autolyse)</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="final-step3">
                <label class="form-check-label stretched-link" for="final-step3">Knead dough and form into ball. Don't worry if dough is still sticky at this stage.</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="final-step4">
                <label class="form-check-label stretched-link" for="final-step4"><p>Cover and let rest another 15-20 minutes.</p> <p>Dough will be easier to work with after this period.</p> <p>Dough should be smooth on the surface, bounce back when poked, and pass the windowpane test.</p></label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="final-step5">
                <label class="form-check-label stretched-link" for="final-step5">Split by portion weight and form into balls</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="final-step6">
                <label class="form-check-label stretched-link" for="final-step6"><p>Place on tray and cover with cling-film or cover container with lid.</p> <p>Let rest 1 - 2 hours until dough doubles in size.</p> <p>This could vary depending on your room temperature.</p></label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="final-step7">
                <label class="form-check-label stretched-link" for="final-step7">Form pizza bases and bake!</label>
            </li>
            </ul>
        </div>
    </div>

<style>
  .footer__col {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100px; /* Set a fixed height for the footer */
    background-color: #333; /* Add a background color for visibility */
  }

  .footer__item {
    text-align: center;
  }
</style>

<nav class="navbar navbar-dark bg-primary">
  <!-- Navbar content here -->
</nav>

<div class="col footer__col">
  <div class="footer__items clean-list">
    <li class="footer__item">
      Hosted with <span style="color: red;">&hearts;</span>
      <a href="https://deplo.io/" rel="noopener noreferrer">
        <img src="https://docs.nine.ch/img/theme/deploio.svg" alt="Deplo.io Logo" width="110" height="100">
      </a>
    </li>
  </div>
</div>





</div> <!-- container -->

<script>

function refresh_data() {
    var portionSize = parseInt($("#inputPortionSize").val());
    var portions = parseInt($("#inputPortions").val());
    var hydration = parseInt($("#inputHydration").val());
    
    var totalDoughWeight = Math.round( portions * portionSize );                //Dough weight is PORTIONS * PORTION-SIZE
    var flourWeight = Math.round( totalDoughWeight / ((hydration/100)+1) );     //Flour weight is TOTAL-DOUGH-WEIGHT / ((HYDRATION / 100) + 1)
    var waterWeight = Math.round((hydration / 100) * flourWeight);              //Water is HYDRATION /100 * flourWeight
    var saltWeight = Math.round( 0.03 * flourWeight);                           //Salt is 3% of Flour weight


    // Time calculations. Working backwards from time to eat
    var dateTimeString = $("#inputDate").val() + " " + $("#inputTime").val();
    var eatDateTime = dayjs(dateTimeString);

    //work backwards
    // The last steps should be started 2-3 hours before the eating time
    var step2DateTime = dayjs(eatDateTime).subtract(2, 'hour');
    var step2StartTime = dayjs(step2DateTime).format("ddd, DD-MMM-YYYY HH:mm");
    
    var step2EarliestDateTime = dayjs(eatDateTime).subtract(3, 'hour');
    var step2EarliestStartTime = dayjs(step2EarliestDateTime).format("ddd, DD-MMM-YYYY HH:mm");

    $("#labelStep2DateTime").html("<i class='bi bi-clock'></i> Recommended time to start: <b>" + step2EarliestStartTime + "</b> and <b>" + step2StartTime + "</b>");

    //Next step is to calculate the 16 + 1 hour ferment
    var latestStartDateTime = dayjs(eatDateTime).subtract(17+3, 'hour').format("ddd, DD-MMM-YYYY HH:mm");

    //And lastly the longest ferment of 24 + 1 hours
    var earliestStartDateTime = dayjs(eatDateTime).subtract(25+3, 'hour').format("ddd, DD-MMM-YYYY HH:mm");

    //set date & time to start
    $("#labelDateTimeToStart").html("<i class='bi bi-clock'></i> Recommended time to start: Between <b>" + earliestStartDateTime + "</b> and <b>" + latestStartDateTime + "</b>");


    //Show a warning if making more than 12 portions
	if (portions > 12) {
		$("#portion-warning").show();	
	}
	else {
		$("#portion-warning").hide();
	}

    $("#inputTotalDoughWeight").val(totalDoughWeight); 
    $("#inputFlour").val(flourWeight); 
    $("#inputWater").val(waterWeight); 
    $("#inputSalt").val(saltWeight); 

    if (waterWeight < 401) {
        $("#inputPoolishFlour").val("100");
        $("#inputPoolishWater").val("100");
        $("#inputPoolishYeast").val("3");
        $("#inputPoolishHoney").val("2");
    }
    else if (waterWeight > 400 && waterWeight < 2501) {
        $("#inputPoolishFlour").val("300");
        $("#inputPoolishWater").val("300");
        $("#inputPoolishYeast").val("6");
        $("#inputPoolishHoney").val("6");
    }

    var poolishFlourWeight = parseInt($("#inputPoolishFlour").val());
    var poolishWaterWeight = parseInt($("#inputPoolishWater").val());
    var poolishYeastWeight = parseInt($("#inputPoolishYeast").val());

    var remainingFlour = Math.round( flourWeight - poolishFlourWeight );
    var remainingWater = Math.round( waterWeight - poolishWaterWeight );
    var remainingSalt = Math.round( saltWeight );

    $("#inputRemainingFlour").val(remainingFlour);
    $("#inputRemainingWater").val(remainingWater);
    $("#inputRemainingSalt").val(remainingSalt);

}

//Refresh when key is pressed
$( "input" ).keyup(function() {
    refresh_data();
});
$( "input" ).change(function() {
    refresh_data();
});

$("#toggleTime").click(function () {
    $(".timeModule").toggle();
});

//Initial refresh of numbers when page loads
$( document ).ready(function() {

    $("#inputDate").flatpickr({
        minDate: "today"
    });

    $("#inputTime").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        time_24hr: true
    });

    refresh_data();
    
});

</script>


</body>


</html>
