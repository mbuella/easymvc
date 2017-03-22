<!-- views/info.php -->
<?php $title = 'New member signup | Codenames' ?>

<?php ob_start() ?>

<main class="container text-center">
    <div class="row">       
        <div class="col-md-12">         
            <form method="POST"
                  id="signup_form">
                <h3>Join Codenames!</h3>
                <?= $msg ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="signup_fname">
                                First Name:
                            </label>
                            <input type="text"
                                   class="form-control"
                                   name="signup[fname]"
                                   id="signup_fname"
                                   value="<?= $newUser['fname']?>"
                                   required
                                   autofocus>
                        </div>                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="signup_lname">
                                Last Name:
                            </label>
                            <input type="text"
                                   class="form-control"
                                   name="signup[lname]"
                                   id="signup_lname"
                                   value="<?= $newUser['lname']?>"
                                   required>
                        </div>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="signup_address">
                        Address:
                    </label>
                    <textarea name="signup[address]"
                              rows="5"
                              class="form-control" 
                              id="signup_address"><?= $newUser['address']?></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="signup_gender"
                                   id="gender-label">
                                Gender:
                            </label>
                            <label class="radio-inline">
                                <input type="radio"
                                       name="signup[gender]"
                                       value="male"
                                       required>
                                    Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio"
                                       name="signup[gender]"
                                       value="female"
                                       required>
                                    Female
                            </label>
                            <label class="radio-inline">
                                <input type="radio"
                                       name="signup[gender]"
                                       value="other"
                                       required>
                                    Other
                            </label>
                        </div>                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="signup_cname">
                                Preferred Codename:
                            </label>
                            <input type="text"
                                   class="form-control"
                                   name="signup[cname]"
                                   id="signup_cname"
                                   value="<?= $newUser['fname']?>"
                                   required>
                        </div>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="signup_pword">
                                Preferred Password:
                            </label>
                            <input type="password"
                                   class="form-control"
                                   name="signup[pword]"
                                   id="signup_pword"
                                   required>
                        </div>                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="signup_pword2">
                                Confirm Password:
                            </label>
                            <input type="password"
                                   class="form-control"
                                   name="signup[pword2]"
                                   id="signup_pword2"
                                   required>
                        </div>                        
                    </div>
                </div>
                <button type="reset"
                        class="btn btn-warning">
                    Clear
                </button>
                <button type="submit"
                        name="signup[submit]"
                        class="btn btn-primary">
                    Submit
                </button>               
                
            </form>
        </div>
    </div>
    </div>
</main>

<?php $content = ob_get_clean() ?>

<?php include '../src/templates/layout.php' ?>
