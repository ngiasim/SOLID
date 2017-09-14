<?php

//Bad Example
public class SavingAccount  
{  
    public function CalculateInterest($accountType)  
    {  
        if($accountType=="Regular")  
        {  
            //Calculate interest for regular saving account 
        }  
        else if($accountType=="Salary")  
        {  
            //Calculate interest for saving account 
        }  
    }  
}


// Good Example
Interface ISavingAccount  
{  
   public function CalculateInterest();  
}  

Public Class RegularSavingAccount implements ISavingAccount  
{  
  public function CalculateInterest()  
  {  
    //Calculate interest for regular saving account
  }  
}  

  

Public Class SalarySavingAccount implements ISavingAccount  
{  
  public function CalculateInterest()  
  {  
    //Calculate interest for saving account 
  }  
}


?>
