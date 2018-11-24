<?php

if(isset($_POST["acti-form"]))
{
  $addActivity = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  $addDescription = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
  $result = query("INSERT INTO `activities` (name,description,category_id) VALUES ('$addActivity','$addDescription','4')");

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
  $addFirstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
  $addLastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
  $addDOB = $_POST['DOB'];
  $addPhoto = $_POST['photo'];
  $addRPD = $_POST['research'];
  $result = query("INSERT INTO `alumni` (firstname,lastname,DOB,photo_path,document_path,category_id) VALUES ('$addFirstname','$addLastname','$addDOB','$addPhoto','$addRPD','1')");

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
  $addReseacher = filter_var($_POST['researcher'], FILTER_SANITIZE_STRING);
  $addRAbstract = filter_var($_POST['abstract'], FILTER_SANITIZE_STRING);
  $addRDOC = $_POST['research'];
  $result = query("INSERT INTO `undergraduate_reseach` (researchers,abstract,document_path,category_id) VALUES ('$addReseacher','$addRAbstract','$addRDOC','7')");

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
  $addFirstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
  $addLastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
  $addDOB = $_POST['DOB'];
  $addPhoto = $_POST['photo'];
  $addSPD = $_POST['research'];
  $result = query("INSERT INTO `staff` (firstname,lastname,DOB,photo_path,document_path,category_id) VALUES ('$addFirstname','$addLastname','$addDOB','$addPhoto','$addSPD','6')");

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
  $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  $duration = $_POST['programme-duration'];

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
  $addCoursename = filter_var($_POST['course-name'], FILTER_SANITIZE_STRING);
  $addCoursenum = filter_var($_POST['course-code'], FILTER_SANITIZE_STRING);
  $adddescript = filter_var($_POST['course-description'], FILTER_SANITIZE_STRING);
  $addCourseyear = $_POST['course-year'];
  $addCourseProgram = $_POST['programme'];
  $result = query("INSERT INTO `courses` (name,course_code,description,course_year,programme_id,category_id) VALUES ('$addCoursename','$addCoursenum,'$adddescript','$addCourseyear','$addCourseProgram','3')");

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
  $addClubname = filter_var($_POST['club-name'], FILTER_SANITIZE_STRING);
  $addClubdesc = filter_var($_POST['club-description'], FILTER_SANITIZE_STRING);
  $result = query("INSERT INTO `clubs` (name,description,category_id) VALUES ('$addClubname', '$addClubdesc', '2')");

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
