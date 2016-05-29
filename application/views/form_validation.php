<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="<?php echo base_url('assets/demo.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/form-basic.css') ?>">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>


<header>
    <h1>Minmarks Codes : Tutorials for codeigniter form validation </h1>
    <a href="http://tutorialzine.com/2015/07/freebie-7-clean-and-responsive-forms/">Download</a>
</header>

<ul>

</ul>


<div class="main-content">
    <form class="form-basic" method="post" action="#">

        <div class="form-title-row">
            <h1>Form Example</h1>
        </div>

        <div class="form-row">
            <label>
                <span>Full name</span>
                <input type="text" name="name">
            </label>
        </div>

        <div class="form-row">
            <label>
                <span>Email</span>
                <input type="text" name="email">
            </label>
        </div>

        <div class="form-row">
            <label>
                <span>Select Day</span>
                <select name="day">
                    <option value="">Select</option>
                    <option>Sunday</option>
                    <option>Monday</option>
                    <option>Tuesday</option>
                    <option>Wednesday</option>
                    <option>Thursday</option>
                    <option>Friday</option>
                    <option>Saturday</option>
                </select>
            </label>
        </div>



        <div class="form-row">
            <label><span>Gender</span></label>
            <div class="form-radio-buttons">

                <div>
                    <label>
                        <input type="radio" name="gender" value="male">
                        <span>Male</span>
                    </label>
                </div>

                <div>
                    <label>
                        <input type="radio" name="gender" value="female">
                        <span>Female</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <label>
                <span>Terms & conditions</span>
                <input type="checkbox" name="privacy" value="male">
            </label>
        </div>


        <div class="form-row">
            <button type="submit">Submit</button>
        </div>

    </form>

</div>

</body>

</html>
