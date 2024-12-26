<?php include("include/header.php")?>
<style>
.start-campaign-section {
    background-color: #4faba599;
    width: 100%;
    padding-block: 150px;
    display: flex;
    justify-content: center;
    align-items: center;
}

#start-campaign-form {
    width: 650px;
    padding-block: 100px;
    padding-inline: 70px;
    box-shadow: 4px 4px 5px 2px #050505b5;
    border-radius: 20px;
    background: white;
}

#start-campaign-form .align-error-container span.error {
    margin-top: 15px;
    display: block;
    color: red;
    font-weight: bolder;
    visibility:hidden;
}

#start-campaign-form .campaign-input-box {
    /* margin-bottom: 35px; */
}

#start-campaign-form .campaign-input-box label {
    display: block;
    margin-top: 20px;
    color: brown;
    font-weight: bolder;

}

#start-campaign-form .address-label {
    color: brown;
    display: block;
    font-weight: bolder;
}

.format-input {
    border-bottom: 2px solid black;
    color: #0090a3f5;
    padding: 0px;
    width: 100%;
}

.format-input:focus {
    border-bottom-color: brown;
    box-shadow: 0px 1px 0px 0px brown;
}

.full70width {
    width: 70%;
}

.fullwidth {
    width: 100%;
}

.split-input {
    display: flex;
    justify-content: space-between;
    align-items: Center;
    gap: 50px;
}


#start-campaign-form .nice-select {
    border: 2px solid black !important;
    width: 100%;
    height: 35px;
}

#start-campaign-form .nice-select span.current {
    transform: translateY(-8px) !important;
    display: inline-block !important;
}

#start-campaign-form .nice-select ul {
    width: 100%;
    box-shadow: 0px 0px 1px 1px brown;
}

#start-campaign-form .nice-select ul li:hover {
    background: #8d9191f5;
    color: black !important;
}

#start-campaign-form .nice-select:focus {
    box-shadow: 0px 0px 1px 1px brown;
    border: none !important;
}

textarea {
    padding-left: 10px;
    padding-top: 10px;
    color: #0090a3f5;
}

::placeholder {
    color: gray;
    /* padding-left:20px;
    padding-top:20px; */
}

.word-count {
    font-weight: bolder;
    color: brown;
}

.warning {
    color: red;
    font-size: 30px;
}
textarea:focus{
    box-shadow: 0px 0px 1px 1px brown;
}
</style>


<section class="start-campaign-section">
    <form action="config.php" method="post" id="start-campaign-form" onsubmit="return validateForm()">
        <h4 style="color:brown; font-weight:bolder;" class="mb-5">START A CAMPAIGN</h4>

        <div class="align-error-container mb-2">
            <div class="campaign-input-box">
                <label for="cname">Name</label>
                <input type="text" name="name" id="cname" class="format-input full70width" spellcheck="false">
            </div>
            <span id="cnameerr" class="error">** Please Enter Name **</span>
        </div>

        <div class="align-error-container mb-2">
            <div class="campaign-input-box">
                <label for="cmobile">Mobile</label>
                <input type="tel" name="mobile" id="cmobile" class="format-input full70width" spellcheck="false">
            </div>
            <span id="cmobileerr" class="error">** Please Enter Mobile **</span>
        </div>

        <div class="split-input">
            <div class="align-error-container mb-2" style="flex-basis:50%;">
                <div class="campaign-input-box">
                    <label for="cemail">Email ID</label>
                    <input type="email" name="email" id="cemail" class="format-input" spellcheck="false">
                </div>
                <span id="cemailerr" class="error">** Please Enter Email **</span>
            </div>

            <div class="align-error-container mb-2" style="flex-basis:50%;">
                <div class="campaign-input-box mb-5">
                    <label for="ccategory">Choose Category</label>
                    <select id="ccategory" name="category" style="border:1px solid black;">
                        <option selected disabled>Select</option>
                        <option value="individual">Individual</option>
                        <option value="group">Group</option>
                        <option value="institutional">Institutional</option>
                        <option value="public">Public</option>
                        <option value="emergency">Emergency</option>
                    </select>
                </div>
                <span id="ccategoryerr" class="error">** Please Enter Category **</span>
            </div>
        </div>

        <div class="split-input">
            <div class="align-error-container mb-2" style="flex-basis:50%;">
                <div class="campaign-input-box">
                    <label for="cfund">Fund Required</label>
                    <input type="text" name="fund" id="cfund" class="format-input" spellcheck="false">
                </div>
                <span id="cfunderr" class="error">** Please Enter Fund **</span>
            </div>

            <div class="align-error-container mb-2" style="flex-basis:50%;">
                <div class="campaign-input-box mb-5">
                    <label for="cspokes">Choose Spokes</label>
                    <select id="cspokes" name="spoke" style="border:1px solid black;">
                        <option selected disabled>Select</option>
                        <option value="Health">Health</option>
                        <option value="Society">Society</option>
                        <option value="Environment">Environment</option>
                        <option value="Education">Education</option>
                        <option value="Employment">Employment</option>
                        <option value="Art & Culture">Art & Culture</option>
                        <option value="Exploration">Exploration</option>
                    </select>
                </div>
                <span id="cspokeserr" class="error">** Please Enter Spokes **</span>
            </div>
        </div>

        <div class="align-error-container mb-4">
            <div class="campaign-input-box">
                <label for="cdescription">Description of cause</label>
                <textarea id="cdescription" spellcheck="false" rows="5" class="fullwidth"
                    style="border:1px solid black;" name="description" placeholder="Enter description within 500 words"></textarea>
                <span class="word-count">Word Count: <span id="counter">0</span>/100</span>
            </div>
            <span id="cdescriptionerr" class="error">** Please Enter Cause **</span>
        </div>

        <span class="address-label">Address of the event/cause</span>

        <div class="split-input">
            <div class="align-error-container mb-2" style="flex-basis:50%;">
                <div class="campaign-input-box">
                    <label for="ccity">City</label>
                    <input type="text" name="city" id="ccity" class="format-input" spellcheck="false">
                </div>
                <span id="ccityerr" class="error">** Please Enter City **</span>
            </div>

            <div class="align-error-container mb-2" style="flex-basis:50%;">
                <div class="campaign-input-box">
                    <label for="cdistrict">District</label>
                    <input type="text" name="district" id="cdistrict" class="format-input" spellcheck="false">
                </div>
                <span id="cdisterr" class="error">** Please Enter District **</span>
            </div>
        </div>

        <div class="split-input">
            <div class="align-error-container mb-2" style="flex-basis:50%;">
                <div class="campaign-input-box">
                    <label for="cstate">State</label>
                    <input type="text" name="state" id="cstate" class="format-input" spellcheck="false">
                </div>
                <span id="cstateerr" class="error">** Please Enter State **</span>
            </div>

            <div class="align-error-container mb-2" style="flex-basis:50%;">
                <div class="campaign-input-box" style="flex-basis:50%;">
                    <label for="cpin">Pin</label>
                    <input type="text" name="pin" id="cpin" class="format-input" spellcheck="false">
                </div>
                <span id="cpinerr" class="error">** Please Enter Pin **</span>
            </div>
        </div>
        <button type="submit" class="btn btn-warning" name="submit">Submit</button>
    </form>
</section>

<script>
const textarea = document.querySelector("#cdescription");
let counter = document.querySelector("#counter");
textarea.addEventListener("keyup", function(e) {
    if (e.target.value != "") {
        let words_count = e.target.value.match(/\w+/g).length;
        if (words_count > 500) {
            counter.textContent = 500;
            if (e.key == "Enter" || e.key == " ") {
                e.preventDefault();
            }
            if (e.which === 32 || e.which === 13) {
                e.preventDefault();
            }
            e.target.value = e.target.value.substr(0, e.target.value.length - 1);
            counter.classList.add("warning");
        } else {
            counter.textContent = words_count;
            counter.classList.remove("warning");
        }
    } else {
        counter.textContent = 0;
        counter.classList.remove("warning");
    }
});

function validateForm() {
    let isValid = true;

    const name = document.getElementById('cname');
    const mobile = document.getElementById('cmobile');
    const email = document.getElementById('cemail');
    const category = document.getElementById('ccategory');
    const fund = document.getElementById('cfund');
    const spokes = document.getElementById('cspokes');
    const description = document.getElementById('cdescription');
    const city = document.getElementById('ccity');
    const district = document.getElementById('cdistrict');
    const state = document.getElementById('cstate');
    const pin = document.getElementById('cpin');

    if (name.value.trim() === '') {
        document.getElementById('cnameerr').style.visibility = 'visible';
        isValid = false;
    } else {
        document.getElementById('cnameerr').style.visibility = 'hidden';
    }

    if (mobile.value.trim() === '') {
        document.getElementById('cmobileerr').style.visibility = 'visible';
        isValid = false;
    } else {
        document.getElementById('cmobileerr').style.visibility = 'hidden';
    }

    if (email.value.trim() === '') {
        document.getElementById('cemailerr').style.visibility = 'visible';
        isValid = false;
    } else {
        document.getElementById('cemailerr').style.visibility = 'hidden';
    }

    if (category.value === 'Select') {
        document.getElementById('ccategoryerr').style.visibility = 'visible';
        isValid = false;
    } else {
        document.getElementById('ccategoryerr').style.visibility = 'hidden';
    }

    if (fund.value.trim() === '') {
        document.getElementById('cfunderr').style.visibility = 'visible';
        isValid = false;
    } else {
        document.getElementById('cfunderr').style.visibility = 'hidden';
    }

    if (spokes.value === 'Select') {
        document.getElementById('cspokeserr').style.visibility = 'visible';
        isValid = false;
    } else {
        document.getElementById('cspokeserr').style.visibility = 'hidden';
    }

    if (description.value.trim() === '') {
        document.getElementById('cdescriptionerr').style.visibility = 'visible';
        isValid = false;
    } else {
        document.getElementById('cdescriptionerr').style.visibility = 'hidden';
    }

    if (city.value.trim() === '') {
        document.getElementById('ccityerr').style.visibility = 'visible';
        isValid = false;
    } else {
        document.getElementById('ccityerr').style.visibility = 'hidden';
    }

    if (district.value.trim() === '') {
        document.getElementById('cdisterr').style.visibility = 'visible';
        isValid = false;
    } else {
        document.getElementById('cdisterr').style.visibility = 'hidden';
    }

    if (state.value.trim() === '') {
        document.getElementById('cstateerr').style.visibility = 'visible';
        isValid = false;
    } else {
        document.getElementById('cstateerr').style.visibility = 'hidden';
    }

    if (pin.value.trim() === '') {
        document.getElementById('cpinerr').style.visibility = 'visible';
        isValid = false;
    } else {
        document.getElementById('cpinerr').style.visibility = 'hidden';
    }

    return isValid;
}
</script>
<?php include("include/footer.php")?>
