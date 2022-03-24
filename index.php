<?php

      /*

            $A = 'What is your name';
            $B = 'My mane is pablu. your name';
            #B = 'My name is Saleh Ahmed';
            $A = 'Where are you from';
            $B = 'I am from Sylhet. And you';
            $A = 'I am from Habigonj';
            $B = 'What do you do';
            $A = 'I am a student';


       */
      $name = 'Saleh Ahmed Pablu';  // datatype is String
      echo gettype($name)."<br>";

      $number = 01;   // datatype is Integer

      echo gettype($number)."<br>"; 

      $age = 20.5;  // datatype is float/double
      echo gettype($age)."<br>";

      $switch = false;  // datatype is boolean (true, false)
      echo gettype($switch)."<br>";
      $student = ['pablu', 'saleh', 'abir']; // datatype is array
      echo gettype($student)."<br>";


      class student{
          function name()
          {
              echo "my name is pablu";
          }
      }
      $obj = new student ; // datatype is object
      $obj ->name();
      echo gettype($obj);

      $total = null; // datatype is NU
       

      









?>