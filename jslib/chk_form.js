/**************** General Common Functions ******************/
function validEmail(field) 
{ 
  var str = field.value; 
  var re = /^(.+)@(.+)$/;
 
  if ((re.test(str)) && (!isEmpty(field)))
    return true;
 
  field.select(); 
  field.focus(); 
 
  return false; 
}// end of checkEmail 
 

/***********************************************************
* General Script Checking Functions
***********************************************************/
function getSelectValue( field )
{
   return field.options[field.selectedIndex].value;
} // end of getSelectValue
 
function displayError ( field, s )
{
  alert( s );    
  field.focus();  
  return false;
} // end of displayError
 
function isEmpty( s )
{
  return (( s == null ) || ( s.length==0 ))
} // end of isEmpty
 
function isNumber(s)
{
  if ( isEmpty(s) ) return true;
  for( var i = 0; i < s.length; i++ )
  {
    if ( !isDigit( s.charAt(i) ) ) return false;
  }
  return true;
} // end of isNumber
 
function isDigit( c )
{
  if ( isEmpty( c ) ) return true;
  else return ( ( c >= "0" ) && ( c <= "9" ) )
} // end of isDigit
 
function isDate ( day, month, year )
{
  var Month31 = "01\n03\n05\n07\n08\n10\n12";
  var Month30 = "04\n06\n09\n11";
  
  if ( ! isNumber( day ) || ! isNumber( month ) || ! isNumber( year ) ) return false;
  if ( month > "12" || month < "01" ) return false;
  if ( Month31.indexOf( month ) != -1 )
  {
    if ( day > "31" || day < "01" ) return false;
    else return true;
  }
  else if ( Month30.indexOf( month ) != -1 )
  {
    if ( day > "30" || day < "01" ) return false;
    else return true;
  }
  else
  {
    if ( year > "00" && year < "49" ) year = "20" + year; 
    if ( year > "50" && year <= "99" ) year = "19" + year; 
    year = parseInt( year );
    day  = parseInt( day, 10 );
    var dayInFeb = ((year % 4 == 0) && ( (!(year % 100 == 0)) || (year % 400 == 0) ) ) ? 29 : 28;
    if ( day > dayInFeb || day < 1 ) return false;
    else return true;

  }
}//end of isDate
