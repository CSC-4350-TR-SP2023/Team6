<?php include 'common/main-header.php'; ?>

<!-- Home and Owner Name -->
<div class="top-main" style="display:table; width:100%;">
    <div style="display:table-row">
        
        <!--Display Favorites -->
        <div style="display: table-cell;">
            <h2>Favorites</h2>
        </div>

        <!-- Owner Name, Pet Name Profile Pic -->
        <div style="display:table-cell;">
            <img src="img/cooper1.jpg" alt="" width="32" height="32" class="rounded-circle me-2 " style="float:right">
            <div class="home-user-content">
                <h1>Bill</h1>
                <h3>Cooper</h3>
            </div>
        </div>
    </div>
</div>



<!-- Contains Filter Dropdowns -->
<div class="filter-box" style="display:table; width:100%;">
    <div style="display:table-row">
        <div style="display: table-cell;width:200px;" class="filter-cells">
            <h5>Filter By:</h3>
        </div>
        <!-- breed -->
        <div style="display: table-cell;width:200px;">
            <div class="dropdown filter-cells">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Size
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">22lbs or less</a>
                    <a class="dropdown-item" href="#">23lbs - 55lbs</a>
                    <a class="dropdown-item" href="#">56lbs and over</a>
                </div>
            </div>
        </div>
        <!-- activity level -->
        <div style="display: table-cell;width:200px;">
            <div class="dropdown filter-cells">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Activity Level
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">22lbs or less</a>
                    <a class="dropdown-item" href="#">23lbs - 55lbs</a>
                    <a class="dropdown-item" href="#">56lbs and over</a>
                </div>
            </div>
        </div>
        <!-- age -->
        <div style="display: table-cell;width:200px;">
            <div class="dropdown filter-cells">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Age
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">22lbs or less</a>
                    <a class="dropdown-item" href="#">23lbs - 55lbs</a>
                    <a class="dropdown-item" href="#">56lbs and over</a>
                </div>
            </div>
        </div>
        <!-- sex -->
        <div style="display: table-cell; width:200px;">
            <div class="dropdown filter-cells">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sex
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">22lbs or less</a>
                    <a class="dropdown-item" href="#">23lbs - 55lbs</a>
                    <a class="dropdown-item" href="#">56lbs and over</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contains Profile Sample Results 1 -->
<div class="result-box">
    <div class="result-border">
        <!-- container -->
        <div class="box-container">
            <!-- left box -->
            <div class="left-box">
                <img src="img/proudpup.jpg" alt="Proud Pup">
            </div>
            <!-- right box -->
            <div class="right-box-result">
                <table style="width:100%;">
                    <tr>
                        <td><h1>Lionheart</h1></td>
                        <td><h1>Golden Retriever</h1></td>
                        <td style="text-align:right"><p>Favorited &#11088; </p>
                    </tr>
                </table>
                <p>
                This Golden Retriever puppy is a confident and fearless little pup. Despite his young age, 
                he stands tall and proud, always ready for any adventure that comes his way. 
                Whether he's exploring new surroundings or meeting new people, he approaches everything 
                with a curious and confident demeanor. Nothing seems to scare him, and he's always eager to 
                take on new challenges. With his brave spirit and lovable personality, this Golden Retriever 
                puppy is sure to win the hearts of everyone he meets.
                </p>
                <table style="width:100%;">
                    <tr>
                        <td><p><strong>Owner: </strong>Godrick Gryffindor</p></td>
                        <td></td>
                        <td style="text-align:center"><br><br><p style="font-size:4em;"><a href="view_profile_other.php">&#x27A1;</a></p>
                    </tr>
                </table>
            </div>
        </div>    
    </div>
</div>

<!-- Contains Profile Sample Results 12 -->
<div class="result-box">
    <div class="result-border">
        <!-- container -->
        <div class="box-container">
            <!-- left box -->
            <div class="left-box">
                <img src="img/goofypup.jpg" alt="Goofy Pup">
            </div>
            <!-- right box -->
            <div class="right-box-result">
                <table style="width:100%;">
                    <tr>
                        <td><h1>Chungus the Bold</h1></td>
                        <td><h1>Pug</h1></td>
                        <td style="text-align:right"><p>Favorited &#11088;</p>
                    </tr>
                </table>
                <p>
                Chungus the Bold is a pug with a unique obsession: he loves playing with balls that are bigger than his head. 
                Despite his small size, he fearlessly tackles these oversized toys and always seems to find a way to make them bounce and roll. 
                His playful and adventurous nature has earned him the nickname "Chungus the Bold" among his friends and family.
                </p>
                <table style="width:100%;">
                    <tr>
                        <td><p><strong>Owner: </strong>Conan the Barbarian</p></td>
                        <td></td>
                        <td style="text-align:center"><br><br><p style="font-size:4em;"><a href="view_profile_other.php">&#x27A1;</a></p>
                    </tr>
                </table>
            </div>
        </div>    
    </div>
</div>

