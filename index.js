let age = document.getElementById('age')
let male = document.getElementById('male')
let female = document.getElementById('female')
let active = document.getElementById('active')
let add1 = document.getElementById('add1')
let add2 =document.getElementById('add2')
let result = document.getElementById('result')


male.onclick = function()
{
    add1.style.display="block"
  
}

female.onclick = function()
{
    add2.style.display="block"

} 

add1.onclick = function()
{
    if(age.value <= 100 && age.value >= 1)
    {
       if(active.value=='weak')
       {
         result.innerHTML = 'your colories are' + (age.value) *20
       }
       else if(active.value=='average')
       {
           console.log('average')
       }
       else if(active.value == 'high' )
       {
            console.log('high')
       }
       else
       {
           console.log('please try again ')

       }

    }
    else
    {
        console.log('sss')
    }
    

}

add2.onclick = function()
{
    if(age.value <= 100 && age.value >= 1)
    {
    if(active.value=='weak')
    {
        result.innerHTML = age.value * 25 + 'colories'

    }
    else if(active.value=='average')
        {
            result.innerHTML = age.value * 35 + 'colories'
        }
            
   else if(active.value == 'high' )
        {
            result.innerHTML = age.value * 40 + 'colories'
        }

    else
    {
        result.innerHTML = 'please try again '
        result.style.color="red";

    }

    }
    else
    {
        result.innerHTML = 'please entry your information '
        result.style.color="red";
    }
    
}