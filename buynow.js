function chk1()
        {
            let regname=/^[a-zA-Z '\.]{2,30}$/;
            let regphone=/^\d{10}$/;

            let name = document.f1.Name.value;
            if(name=="")
            {
                document.getElementById("errorname").innerHTML="<br>Name is Empty";
                //alert("Name not entered");
                return false;
            }
            else
            if(!name.match(regname))
            {
                document.getElementById("errorname").innerHTML="<br>Please check the Name Entered";
            }
            else
            {
                document.getElementById("errorname").innerHTML="";
            }


        let cphoneno = document.f1.Number.value;
            if(cphoneno=="")
            {
                document.getElementById("errorphoneno").innerHTML="<br>Phone No is Empty";
                return false;
            }
            else
            if(!cphoneno.match(regphone))
            {
                document.getElementById("errorphoneno").innerHTML="<br>Please check the Phone Number entered";
            }
            else
            {
                document.getElementById("errorphoneno").innerHTML="";
            }


            let addr = document.f1.Address.value;
            if(addr=="")
            {
                document.getElementById("erroraddr").innerHTML="<br>Address in not entered";
                return false;
            }
            else
            {
                document.getElementById("erroraddr").innerHTML="";
            }

            let car = document.f1.category.value;
            if(car=="")
            {
                document.getElementById("errorcar").innerHTML="<br>Category is not selected";
                return false;
            }
            else
            {
                document.getElementById("errorcar").innerHTML="";
            }


            let producttype
            if(document.getElementById("bar").checked)
            {
                producttype=bar;
            }
            else if(document.getElementById("dumbbell").checked)
            {
                producttype=dumbbell;
            }
            else if(document.getElementById("plates").checked)
                {
                    producttype=plates;
                }
                else if(document.getElementById("bell").checked)
                    {
                        producttype=bell;
                    }
                    else if(document.getElementById("mill").checked)
                        {
                            producttype=mill;
                        }
                        else if(document.getElementById("leg").checked)
                            {
                                producttype=leg;
                            }
                            else if(document.getElementById("bicep").checked)
                                {
                                    producttype=bicep;
                                }
                                else if(document.getElementById("pulley").checked)
                                    {
                                        producttype=pulley;
                                    }
            else
            {
                document.getElementById("errorradio").innerHTML="Please select the product type";
                return false;
            }



            let qty = document.f1.quantity.value;
            if(qty=="")
            {
                document.getElementById("errorquantity").innerHTML="<br>Quantity is not selected";
                return false;
            }
            else
            {
                document.getElementById("errorquantity").innerHTML="";
            }


            
            if(!(document.getElementById("checkcod").checked)&&
            !(document.getElementById("privacyPolicy").checked))
            {
                document.getElementById("errorcheckbox").innerHTML="Please select";
                return false;
            }
            else
            {
                document.getElementById("errorcheckbox").innerHTML="";
            }

        }

        