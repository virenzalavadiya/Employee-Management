<?php
                 include "connection.php";
                 include 'getkey.php';  
                 error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
                $target_dir = "uploads/";
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                    // Check if image file is a actual image or fake image
                    if(isset($_POST["submit"])) {
                        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                        if($check !== false) {
                        $uploadOk = 1;
                    // Check if file already exists
                            // if (file_exists($target_file)) {
                            // $uploadOk = 0;
                            // echo" <script language='JavaScript' type='text/javascript'>
                            // if (confirm('Sorry, file already exists.'))
                            // {
                            // self.location = 'profile.php?iskey=$key';
                            // } else {
                            // history.go(-1);
                            // }
                            // </script>";
                            // }
                        
                    // Check file size
                            if ($_FILES["fileToUpload"]["size"] > 5000000) {
                            $uploadOk = 0;
                            echo" <script language='JavaScript' type='text/javascript'>
                            if (confirm('Sorry, your file is too large.Please upload File lessthan 5MB'))
                            {
                            self.location = 'profile.php?iskey=$key';
                            } else {
                            history.go(-1);
                            }
                            </script>";
                            }
    
                            } else {
                                $uploadOk = 0;
                                echo" <script language='JavaScript' type='text/javascript'>
                                if (confirm('Plese First Select The File.'))
                                {
                                self.location = 'profile.php?iskey=$key';
                                } else {
                                history.go(-1);
                                }
                                </script>";
                            }
                        
                }

                 
                    // Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                        $uploadOk = 0;
                    echo" <script language='JavaScript' type='text/javascript'>
                    if (confirm('Sorry, only JPG, JPEG, PNG & GIF files are allowed.'))
                    {
                    self.location = 'profile.php?iskey=$key';
                    } else {
                    history.go(-1);
                    }
                    </script>";
                   
                    }

                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                    echo" <script language='JavaScript' type='text/javascript'>
                    if (confirm('Sorry, your file was not uploaded.'))
                    {
                    self.location = 'profile.php?iskey=$key';
                    } else {
                    history.go(-1);
                    }
                    </script>";
                    // if everything is ok, try to upload file
                    } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        $file_name= htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));

                        mysqli_query($conn,"UPDATE employee set Image='$file_name' where Key_id=$key");
                        
                        echo" <script language='JavaScript' type='text/javascript'>
                        if (confirm('The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]))." has been uploaded.'))
                        {
                        self.location = 'profile.php?iskey=$key';
                        } else {
                        history.go(-1);
                        }
                        </script>";
                    } 
                    else {
                        echo" <script language='JavaScript' type='text/javascript'>
                        if (confirm('Sorry, there was an error uploading your file.'))
                        {
                        self.location = 'profile.php?iskey=$key';
                        } else {
                        history.go(-1);
                        }
                        </script>";
                    }
                    }
?>
