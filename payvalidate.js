function payValidation()
{
	
	
	var fname = document.getElementById("fullname").value;
	var nameoncard = document.getElementById("nameoncard").value;
	var baddressline1 = document.getElementById("baddressline1").value;
	var cardnumber = document.getElementById("cardnumber").value;
	var baddressline2 = document.getElementById("baddressline2").value;
	var cvv = document.getElementById("cvv").value;
	var bcity = document.getElementById("bcity").value;
	var bstate = document.getElementById("bstate").value;
	var caddressline1 = document.getElementById("caddressline1").value;
	var bzip = document.getElementById("bzip").value;
	var bcountry = document.getElementById("bcountry").value;
	var caddressline2 = document.getElementById("caddressline2").value;
	var ccity = document.getElementById("ccity").value;
	var cstate = document.getElementById("cstate").value;
	var czip = document.getElementById("czip").value;
	var ccountry = document.getElementById("ccountry").value;

	
	if(alphabet(fname, "Please use only alphabets for your name"))
	{
		if(alphabet(nameoncard, "Please use only alphabets for your name on card"))
		{
			if(alphanumeric(baddressline1, "Please use only alphanumeric values for your address"))
			{
				if(numberlength(cardnumber,16,"Please enter a valid card number"))
				{
					if(alphanumeric(baddressline2, "Please use only alphanumeric values for your address"))
					{
						if(numberlength(cvv,3, "Please enter a valid cvv number"))
						{
							if(alphabet(bstate, "Please use only alphabets for the state"))
							{
								if(alphanumeric(caddressline1, "Please use only alphanumeric values for your address"))
								{
									if(numberlength(bzip,5,"Please enter a valid zip code"))
									{
										if(alphabet(bcountry, "Please use only alphabets for the country"))
										{
											if(alphanumeric(caddressline2, "Please use only alphanumeric values for your address"))
											{
												if(alphabet(bcity, "Please use only alphabets for the city"))
												{
													if(alphabet(ccity, "Please use only alphabets for the city"))
													{
														if(alphabet(cstate, "Please use only alphabets for the state"))
														{
															if(numberlength(czip,5,"Please enter a valid zip code"))
															{
																if(alphabet(ccountry, "Please use only alphabets for the country"))
																{
																	return true;
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
					
			}
		}
	}
	return false;
	
}
function alphabet(inputs,msg)
{
	var ex = /^[a-zA-Z]+$/;
	if(inputs.value.match(ex))
	{
		return true;
	}
	else
	{
		document.getElementById('perror').innerText = msg;
		inputs.focus();
		return false;
	}
}
function alphanumeric(inputs,msg)
{
	var ex = /^[0-9a-zA-Z]+$/;
	if(inputs.value.match(ex))
	{
		return true;
	}
	else
	{
		document.getElementById('perror').innerText = msg;
		inputs.focus();
		return false;
	}
}
function numberlength(inputs,max,msg)
{
	var ex = /^[0-9]+$/;
	if(inputs.value.match(ex) && inputs.value.length == max)
	{
		return true;
	}
	else
	{
		document.getElementById('perror').innerText = msg;
		inputs.focus();
		return false;
	}
}
alert alphabet('55','ok');
