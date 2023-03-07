<?php include 'common/main-header.php'; ?>

<div class="top-main" style="display:table; width:100%;">

    <div style="display:table-row">
        
        <!--Display Home -->
        <div style="display: table-cell;">
            <h2>Profile</h2>
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
<hr style="border-style:solid;border-width:3px">
<div class="profile">
    <div class="box-container-profile">
        <!-- left box -->
        <div class="left-box-profile-user">
            
            <h1>Personal Information &#9999</h1>

            <table>
                <tr>
                    <td>first name: Bill</td>
                    <td>last name: Nye the Science Guy</td>
                </tr>
                <tr>
                    <td>city: Atlanta</td>
                    <td>email: scienceguy@science.com</td>
                </tr>
                <tr>
                    <td>state: GA</td>
                    <td>phone number: 999-999-9999</td>
                </tr>
                <tr>
                    <td>Password: ********** edit </td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <br>
            <h1>Pet Information &#9999</h1>

            <table>
                <tr>
                    <td>name: Cooper</td>
                    <td>sex: Male</td>
                    <td>age: 2</td>
                </tr>
                <tr>
                    <td>breed: Redbone Coonhound</td>
                    <td>weight: over 55 lbs</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Vaccinated: Yes </td>
                    <td>Neutered? Yes</td>
                    <td></td>
                </tr>
                
            </table>
            <br>
            <h1>Attributes <button type="button" class="btn btn-secondary">add more</button></h1>

            <table>
                <tr>
                    <td><button type="button" class="btn btn-info btn-lg">Shy</button></td>
                    <td><button type="button" class="btn btn-info btn-lg">Plays Aggresive</button></td>
                    <td><button type="button" class="btn btn-info btn-lg">very social</button></td>
                    <td><button type="button" class="btn btn-info btn-lg">very loud</button></td>
                </tr>
                <tr>
                    <td><button type="button" class="btn btn-info btn-lg">friendly</button></td>
                    <td><button type="button" class="btn btn-info btn-lg">toy safe</button></td>
                    <td><button type="button" class="btn btn-info btn-lg">inexperienced</button></td>
                </tr>
            </table>
            <br>
            <h1>Gallery</h1>
            <div id=login-img>
                <img style="margin:6px;" src="img/dogsplaying1.jpg" alt="Happy Puppy">
                <img style="margin:6px;" src="img/dogsplaying2.jpg" alt="Proud Puppy">
                <img style="margin:6px;" src="img/dogsplaying4.jpg" alt="Goofy Puppy">
                <img style="margin:6px;" src="img/dogsplaying5.jpg" alt="Goofy Puppy">
            </div>
            <br>
            <h1>Descriptions &#9999</h1>
            <br>
            <h4>Bill Nye the Science Guy</h4>
            <p style="font-size:20px;">
                Yo, what's up? It's your boy Bill Nye the Science Guy in the house! You might know me 
                from my sick science experiments on TV, or from my killer bow ties that are straight fire. 
                I'm all about using science to make sense of the world, and I'm not afraid to drop some 
                knowledge on you. I'm like the OG science influencer, using my platform to educate and 
                inspire people to get excited about STEM. So if you're ready to get your mind blown by 
                some science, come roll with me and let's get lit!
            </p>
            <br>
            <h4>Cooper</h4>
            <p style="font-size:20px;">
            Oh, fair audience, lend me thy ear,
            And listen to the tale of Cooper dear.
            A Redbone Coonhound, two years old,
            Whose tale of adoption must be told.

            With coat as red as sunset skies,
            And eyes that shine like stars arise,
            Cooper is a hound of noble breed,
            Whose presence is sure to succeed.

            With boundless energy, he doth run,
            As if chasing the sun for fun,
            And fetches balls with great delight,
            His passion for play shines bright.

            Oh, how he doth frolic and leap,
            His joyful heart doth skip and sweep,
            With each toss of the ball he doth chase,
            A sight of pure delight and grace.

            Though he was once without a home,
            His new abode he doth not roam,
            For in his human's heart he found,
            A love that doth in him abound.

            So let us all give cheers and praise,
            To Cooper, who doth our hearts amaze,
            A Redbone Coonhound of two years old,
            Whose story of adoption is now told.
            </p>
            <br>
        </div>

        <div class="right-box-profile">
            <div style="display:table; width:100%;">
                <!-- dog image -->
                <div style="display:table-row; text-align:center;">
                    <img src="img/cooper1.jpg" alt="Goofy Pup">
                    
                </div>
                <div style="display:table-row; text-align:center;">
                    <a href="#" class="btn btn-primary btn-lg" role="button">change picture</a>
                </div>
                <div style="display:table-row; text-align:center;">
                    <br><br>
                </div>
                <!-- owner image -->
                <div style="display:table-row; text-align:center;">
                    <img src="img/bill.jpg" alt="The Guy">
                </div>
                <div style="display:table-row; text-align:center;">
                    <a href="#" class="btn btn-primary btn-lg" role="button">change picture</a>
                </div>
            </div>
        </div>
    </div>
</div>