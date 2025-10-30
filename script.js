//feedback form validation
function chk2()
        {
            let regname=/^[a-zA-Z '\.]{2,30}$/;
            let regemail=/^[a-zA-Z0-9._-]+@[a-zA-Z]+\.[a-zA-Z\.]+$/
            

            let cname = document.f2.fname.value;
            if(cname=="")
            {
                document.getElementById("errorname").innerHTML="<br>Name is Empty";
                //alert("Name not entered");
                return false;
            }
            else
            if(!cname.match(regname))
            {
                document.getElementById("errorname").innerHTML="<br>Please check the Name Entered";
            }
            else
            {
                document.getElementById("errorname").innerHTML="";
            }



            let femailaddr = document.f2.email.value;
            if(femailaddr=="")
            {
                document.getElementById("erroremailaddr").innerHTML="<br>Email Address is Empty";
                return false;
            }
            else
            if(!femailaddr.match(regemail))
            {
                document.getElementById("erroremailaddr").innerHTML="<br>Please Check the Email Address Entered";
            }
            else
            {
                document.getElementById("erroremailaddr").innerHTML="";
            }


        }


//Add to cart java script
        function addToCart(name, price) {
            let cart = JSON.parse(localStorage.getItem("cart")) || []; // Get cart or create empty array
            cart.push({ name, price }); // Add new item
            localStorage.setItem("cart", JSON.stringify(cart)); // Save cart in localStorage
            console.log("Cart updated:", cart); // Debugging
            alert("Added to cart!"); // Show confirmation
        }