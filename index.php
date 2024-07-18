<?php
    $input1="";
    $input2="";
    $op="";
    $output="";
    if(isset($_POST['submit']))
    {
        if(!empty($_POST['input1']) && !empty($_POST['input2']) && !empty($_POST['option'])){
            $input1=(float)$_POST['input1'];
            $input2=(float)$_POST['input2'];
            $op= $_POST['option'];
            if($_POST['option']=="+"){
                $output = $input1+$input2;
            }else if($_POST['option']=="-"){
                $output = $input1-$input2;
            }else if($_POST['option']=="*"){
                $output = $input1*$input2;
            }else if($_POST['option']=="/"){
                $output = $input1/$input2;
            }else{
                $output = "Please Enter a Valid Data";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/darkly/bootstrap.min.css" integrity="sha384-nNK9n28pDUDDgIiIqZ/MiyO3F4/9vsMtReZK39klb/MtkZI3/LtjSjlmyVPS3KdN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
        <div class="container">
            <form action="index.php" class="form-group" method="post">
            <div class="row">
                <div class="col-md-8">
                    <label class="col-lg-4 control-label">First Value :<span style="color: red; font-size: 180%">*</span></label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="input1" id="input1" value="<?php echo $input1; ?>" class="output" required/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <label class="col-lg-4 control-label">Second Value :<span style="color: red; font-size: 180%">*</span></label>
                    <div class="col-lg-8">
                    <input type="text" class="form-control" name="input2" id="input2" value="<?php echo $input2; ?>" class="output" required/>
                    </div>
                </div>
            </div> 
            <br>
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                    <div class="col-md-2">
                        <label class="col-lg-4 control-label">Addition</label>
                        <input type="radio" class="form-control" name="option" id="plus" value="+" required/>
                    </div>
                    <div class="col-md-2">
                        <label class="col-lg-4 control-label">Substraction</label>
                        <input type="radio" class="form-control" name="option" id="minu" value="-"/>
                    </div>
                    <div class="col-md-2">
                        <label class="col-lg-4 control-label">Multiplication</label>
                        <input type="radio" class="form-control" name="option" id="multi" value="*"/>
                    </div>
                    <div class="col-md-2">
                        <label class="col-lg-4 control-label">Division</label>
                        <input type="radio" class="form-control" name="option" id="divi" value="/"/>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-8 ml-4">
                <input type="submit" name="submit" value="Result" class="btn btn-primary">
                <input type="submit" name="reset" value="Reset" class="btn btn-info">
            </div>
        </div>
    </form>
    <br>
    <div class="row">
        <div class="col-md-8">
            <label class="col-lg-4 control-label">Result Value :</label>
            <div class="col-lg-8">
            <input type="text" class="form-control" name="output" id="output" value="<?php echo $output; ?>" class="output" disabled/>
            </div>
        </div>
    </div> 
</div>
</body>
</html>