# Summary
This class blanks out the Super Globals $_POST and $_GET and stores their contents within the class. Allowing better control over the input and what code can access it.


# Basic Usage

    $input = new Input();
    echo $input->get('id');
    echo $input->post('id');

# Default Parameters
Default Paramaters can be passed as the second option
    
    $input->get('test','default value here');
    
# Sanitization 
Strips Tags by default, can be disabled by passing false as third option.
    
    $input->get('test','false',false);

# Test
As features are added, there will be new tests to prove they work as intended. 
You can run the tests yourself using the following command.

    vendor/bin/phpunit test
    
![PHPUnit Tests](https://github.com/christopher-paul-shaw/Input/workflows/PHPUnit%20Tests/badge.svg?branch=master)
