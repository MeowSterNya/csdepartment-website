<?php
if(isset[$_POST["acti-form"]])
{
    $addactivity = $_POST['addactivity'];
    $adddescript = $_POST['adddescript'];
    $result = query("INSERT INTO activity 'activity','description' VALUES '$addactivity','$adddescript'");

    if($result)
    {
        ?><script>window.alert(Activity Successfully Added);</script><?php
    }
        else
        {
            ?><script>window.alert(Activity Failed To Be Added);</script><?php
        }
}

if(isset[$_POST["alumni-form"]])
{
    $addFirstname = $_POST['Firstname'];
    $addLastname = $_POST['Lastname'];
    $addDOB = $_POST['DOB'];
    $addPhoto = $_POST['Alumni-Photo'];
    $addRPD = $_POST['RPD'];
    $result = query("INSERT INTO alumni 'Firstname','Lastname','DOB','Photo','Research_Document' VALUES '$addFirstname','$addLastname','$addDOB','$addPhoto','$addRPD'");

    if($result)
    {
        ?><script>window.alert(Alumni Successfully Added);</script><?php
    }
        else
        {
            ?><script>window.alert(Alumni Failed To Be Added);</script><?php
        }
}

if(isset[$_POST["undergrad-form"]])
{
    $addReseacher = $_POST['Researcher'];
    $addRAbstract = $_POST['R_Abstract'];
    $addRDOC = $_POST['R_DOC'];
    $result = query("INSERT INTO undergraduate_reseach 'Researcher','Research_Abstract','Research_Document' VALUES '$addReseacher','$addRAbstract','$addRDOC'");

    if($result)
    {
        ?><script>window.alert(Undergraduate Research Item Successfully Added);</script><?php
    }
        else
        {
            ?><script>window.alert(Undergraduate Research Item Failed To Be Added);</script><?php
        }
}

if(isset[$_POST["staff-form"]])
{
    $addFirstname = $_POST['Firstname'];
    $addLastname = $_POST['Lastname'];
    $addDOB = $_POST['DOB'];
    $addPhoto = $_POST['Staff-Photo'];
    $addSPD = $_POST['SPD'];
    $result = query("INSERT INTO staff 'Firstname','Lastname','DOB','Photo','Research_Document' VALUES '$addFirstname','$addLastname','$addDOB','$addPhoto','$addSPD'");

    if($result)
    {
        ?><script>window.alert(Staff Successfully Added);</script><?php
    }
        else
        {
            ?><script>window.alert(Staff Failed To Be Added);</script><?php
        }
}

if(isset[$_POST["programme-form"]])
{
    $addProgram = $_POST['Programme'];
    $addDuration = $_POST['programme-duration'];
    $result = query("INSERT INTO programme 'Name','Programme_Duration' VALUES '$addProgram','$addDuration'");

    if($result)
    {
        ?><script>window.alert(Programme Successfully Added);</script><?php
    }
        else
        {
            ?><script>window.alert(Programme Failed To Be Added);</script><?php
        }
}

if(isset[$_POST["course-form"]])
{
    $addCoursename = $_POST['course-name'];
    $addCoursenum = $_POST['course-code'];
    $adddescript = $_POST['course-description'];
    $addCourseyear = $_POST['course-year'];
    $addCourseProgram = $_POST['programme']
    $result = query("INSERT INTO course 'Course_Name','Course_Number','Course_Description','Course_Year','Programme' VALUES '$addCoursename','$addCoursenum,'$adddescript','$addCourseyear','$addCourseProgram");

    if($result)
    {
        ?><script>window.alert(Course Successfully Added);</script><?php
    }
        else
        {
            ?><script>window.alert(Course Failed To Be Added);</script><?php
        }
}

if(isset[$_POST["club-form"]])
{
    $addClubname = $_POST['club-name'];
    $addClubdesc = $_POST['club-description'];
    $result = query("INSERT INTO club 'Club_Name','Club_Description' VALUES '$addClubname''$addClubdesc'");

    if($result)
    {
        ?><script>window.alert(Club Successfully Added);</script><?php
    }
        else
        {
            ?><script>window.alert(Club Failed To Be Added);</script><?php
        }
}
?>
