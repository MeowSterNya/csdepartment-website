<?php
  if(isset($_POST["activity-form"]))
  {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $result = query("INSERT INTO `activities` (name,description,category_id) VALUES ('$nctivity','$description','4')");

    if($result>0)
    {
      ?><script>window.alert("Activity Successfully Added");</script><?php
    }
    else
    {
      ?><script>window.alert("Activity Failed To Be Added");</script><?php
    }
  }

  if(isset($_POST["alumni-form"]))
  {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $DOB = $_POST['DOB'];
    $photo = $_POST['photo'];
    $document = $_POST['research'];
    $result = query("INSERT INTO `alumni` (firstname,lastname,DOB,photo_path,document_path,category_id) VALUES ('$firstname','$lastname','$DOB','$photo','$document','1')");

    if($result>0)
    {
      ?><script>window.alert("Alumni Successfully Added");</script><?php
    }
    else
    {
      ?><script>window.alert("Alumni Failed To Be Added");</script><?php
    }
  }

  if(isset($_POST["undergrad-form"]))
  {
    $reseacher = $_POST['researcher'];
    $abstract = $_POST['abstract'];
    $document = $_POST['research'];
    $result = query("INSERT INTO `undergraduate_reseach` (researchers,abstract,document_path,category_id) VALUES ('$reseacher','$abstract','$document','7')");

    if($result>0)
    {
      ?><script>window.alert("Undergraduate Research Item Successfully Added");</script><?php
    }
    else
    {
      ?><script>window.alert("Undergraduate Research Item Failed To Be Added");</script><?php
    }
  }

  if(isset($_POST["staff-form"]))
  {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $DOB = $_POST['DOB'];
    $photo = $_POST['photo'];
    $document = $_POST['research'];
    $result = query("INSERT INTO `staff` (firstname,lastname,DOB,photo_path,document_path,category_id) VALUES ('$firstname','$lastname','$DOB','$photo','$document','6')");

    if($result>0)
    {
      ?><script>window.alert("Staff Successfully Added");</script><?php
    }
    else
    {
      ?><script>window.alert("Staff Failed To Be Added");</script><?php
    }
  }

  if(isset($_POST["programme-form"]))
  {
    $name = $_POST['name'];
    $duration = $_POST['programme-duration'];
    $result = query("INSERT INTO `programmes` (name,duration,category_id) VALUES ('$name','$duration','5')");

    if($result>0)
    {
      ?><script>window.alert("Programme Successfully Added");</script><?php
    }
    else
    {
      ?><script>window.alert("Programme Failed To Be Added");</script><?php
    }
  }

  if(isset($_POST["courses-form"]))
  {
    $name = $_POST['name'];
    $coursecode = $_POST['course-code'];
    $description = $_POST['course-description'];
    $courseyear = $_POST['course-year'];
    $courseprogramme = $_POST['programme'];
    $result = query("INSERT INTO `courses` (name,course_code,description,course_year,programme_id,category_id) VALUES ('$name','$coursecode,'$description','$courseyear','$courseprogramme','3')");

    if($result>0)
    {
      ?><script>window.alert("Course Successfully Added");</script><?php
    }
    else
    {
      ?><script>window.alert("Course Failed To Be Added");</script><?php
    }
  }

  if(isset($_POST["club-form"]))
  {
    $name = $_POST['club-name'];
    $description = $_POST['club-description'];
    $result = query("INSERT INTO `clubs` (name,description,category_id) VALUES ('$name', '$description', '2')");

    if($result>0)
    {
      ?><script>window.alert("Club Successfully Added");</script><?php
    }
    else
    {
      ?><script>window.alert("Club Failed To Be Added");</script><?php
    }
  }
?>
