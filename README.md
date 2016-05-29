# ci-validations
full validations description of codeIgniter
create a controller and load the form validation library and helper form and url.

    $this->load->helper(array("form","url"));
    $this->load->library('form_validation');
and load your view.
####In view
create a html form 

    <form class="form-basic" method="post">
    <input type="text" name="name">
    <input type="text" name="email">
    </form>
and set rules for validate your form in controller

    $this->form_validation->set_rules('name', 'name', 'required');
    $this->form_validation->set_rules('email', 'email', 'required|valid_email');

Run validations rule by 

    if ($this->form_validation->run() == FALSE){
            $this->pageData["from_status"] = "Form successfully validated";
        }
To show the errors, there are a default function by codeigniter `validation_errors()` . Call this function in your view file.

[View Live Demo](http://minmarks.com/demo/codeigniter-validation)
