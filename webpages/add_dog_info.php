<?php include 'common/login-header.php'; ?>

<!-- Start -->
<div class="box-container">
    <div class="left-box">
        <div class="login">
            <div>  
                <P>
                    <h1>Create Your Account</h1>
                </p>
            </div>
        </div>
        <div class="right-box">
            <form  class="outer-form-account-creation">
                <div class="form-custom">
                    <h2>Pet Information</h2>
                </div>
                <div>
                    <div class="grid-container-element">
                        <div class="grid-child-element">
                            <div class="form-group">
                                <input type="name" class="form-control" id="exampleCity" aria-describedby="cityHelp" placeholder="name">
                            </div>
                        </div>
                        <div class="grid-child-element">
                            <table>
                                <tr>
                                    <th>
                                        <select class="form-select" aria-label="Default select example" style="width:auto; margin-right:8px;">
                                            <option selected>age</option>
                                            <option value="puppy">Puppy</option>
                                            <option value="adult">Adult</option>
                                            <option value="senior">Senior</option>
                                        </select>   
                                    </th>
                                    <th>
                                        <div class="btn-group">
                                            <input type="radio" class="btn-check" name="options2" id="radio5" autocomplete="off">
                                            <label class="btn btn-outline-secondary" for="radio5">Male</label>

                                            <input type="radio" class="btn-check" name="options2" id="radio6" autocomplete="off">
                                            <label class="btn btn-outline-secondary" for="radio6">Female</label>
                                        </div>
                                    </th>   
                                </tr>
                            </table>    
                        </div>
                    </div>   
                    <div class="grid-container-element">
                        <div class="grid-child-element">
                            <select class="form-select" aria-label="Default select example" >
                                <option selected>breed</option>
                                <option value="1">Golden Retiriever</option>
                                <option value="2">Pug</option>
                                <option value="3">Redbone Coonhound</option>
                            </select>
                        </div>
                        <div class="grid-child-element">
                            <select class="form-select" aria-label="Default select example" >
                                <option selected>weight</option>
                                <option value="1">Under 22 lbs</option>
                                <option value="2">22-55 lbs</option>
                                <option value="3">Over 55 lbs</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid-container-element">
                        <div class="grid-child-element">
                                Vaccinated?
                            <div class="btn-group">
                                <input type="radio" class="btn-check" name="options" id="radio1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="radio1">Yes</label>

                                <input type="radio" class="btn-check" name="options" id="radio2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="radio2">No</label>
                            </div>
                        </div>
                        <div class="grid-child-element">
                                Neutered?
                            <div class="btn-group">
                                <input type="radio" class="btn-check btn-radio-custom" name="options1" id="radio3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="radio3">Yes</label>

                                <input type="radio" class="btn-check" name="options1" id="radio4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="radio4">No</label>
                            </div>
                        </div>
                    </div>
                </div>
                <table style="margin-left:auto;margin-right:auto">
                    <tr>
                        <td style="padding:10px"><a href="create_user.php" type="button" class="btn btn-primary">Back</button></td>
                        <td><a type="button" href="add_descriptions.php" class="btn btn-primary">Next</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>



