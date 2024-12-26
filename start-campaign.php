<?php include("include/header.php");
include "db_connect/connection.php";?>
<style>
.start-campaign-section {
    /* background-color: #4faba599; */
    background-image: linear-gradient(147deg, #194b4799 22%, purple 20%, blue 35%, #4b2020 4%, orange 92%);
    /* background-image: linear-gradient(147deg, #194b4799 20%, purple 20%, blue 30%, #4b2020 30%, orange 45%, #4d704d 30%); */
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
    /* background: linear-gradient(60deg,rgb(79, 171, 165,1),pu,green,orange); */
    background:white;

}

#start-campaign-form .align-error-container span.error {
    margin-top: 0px;
    margin-bottom:25px;
    display: block;
    color: red;
    font-weight: bolder;
    visibility:hidden;
    font-size:14px;
}

/* #start-campaign-form .campaign-input-box {
    margin-bottom: 35px;
} */

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

.full70width1 {
    width: 90%;
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

.align-error-container{
    height:97px;
}

textarea {
    padding-left: 10px;
    padding-top: 10px;
    color: #0090a3f5;
}

textarea:focus{
    box-shadow: 0px 0px 1px 1px brown;
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

/* .submit-btn{
    transition:all 0.5s ease;
    box-shadow: 0 9px black;
}
.submit-btn:active{
    box-shadow: 0 5px black;
    transform:translateY(4px);
   
} */

</style>

<section class="start-campaign-section">

    <form  method="post" id="start-campaign-form" enctype="multipart/form-data">
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
                <label for="cname">Adhar Number</label>
                <input type="text" name="adhar" id="cname" class="format-input full70width" spellcheck="false">
            </div>
            <span id="cnameerr" class="error">** Please Enter Adhar Numaer **</span>
        </div>
        
        
        <div class="split-input">
        
          <div class="align-error-container mb-2">
            <div class="campaign-input-box">
                <label for="cmobile">Image </label>
                <input type="file" name="image[]" id="image"  spellcheck="false" multiple>
                <small class="text-danger">(only JPEG/JPG format is allowed)</small>
            </div>
            <span id="cmobileerr" class="error">** Please  **</span>
        </div>


        <div class="align-error-container mb-2">
            <div class="campaign-input-box">
                <label for="cmobile">Mobile</label>
                <input type="text" name="mobile" id="cmobile" class="format-input full70width1" spellcheck="false">
            </div>
            <span id="cmobileerr" class="error">** Please Enter Mobile **</span>
        </div>
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
                <div class="campaign-input-box" id="ccategory-container">
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
                <span id="ccategoryerr" class="error mt-2">** Please Enter Category **</span>
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
                <div class="campaign-input-box">
                    <label for="cspokes">Choose Spokes</label>
                    <select id="cspokes" name="spokes" style="border:1px solid black;">
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
                <!-- <input type="tel" id="cmobile" class="format-input full70width" spellcheck="false"> -->
                <textarea id="cdescription" name="description" spellcheck="false" rows="5" class="fullwidth"
                    style="border:1px solid black;" placeholder="Enter description within 500 words"></textarea>
                <span class="word-count">Word Count: <span id="counter">0</span>/500</span>
            </div>
            <span id="cdescriptionerr" class="error">** Please Enter Cause **</span>
        </div>


        <span class="address-label" style="margin-top:180px;">Address of the event/cause</span>

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

        <button type="submit" name="submit" value="submit" style="background:brown;color:white;padding:5px; width:120px;margin:50px Auto 0px; border-radius:10px;" class="submit-btn" id="scsubmit-btn">Submit</button>

    </form>

</section>


<script>

    // textarea word count code
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


// form validation code


// const submitbtn = document.querySelector("#scsubmit-btn");
// submitbtn.addEventListener("click", function(e) {
//     e.preventDefault();
//     if (formValidate()) {
//         submitbtn.disabled = true; // Disable the button
//         document.querySelector("#start-campaign-form").submit();
//     }
// });

// function formValidate(){


//     const form=document.querySelector("#start-campaign-form");

//     const name=document.querySelector("#cname").value;
//     const mobile=document.querySelector("#cmobile").value;
//     const email=document.querySelector("#cemail").value;
//     const category=document.querySelector("#ccategory");
//     const fund=document.querySelector("#cfund").value;
//     const spokes=document.querySelector("#cspokes");
//     const description=document.querySelector("#cdescription").value;
//     const city=document.querySelector("#ccity").value;
//     const district=document.querySelector("#cdistrict").value;
//     const state=document.querySelector("#cstate").value;
//     const pin=document.querySelector("#cpin").value;

    

//     const nameerr=document.querySelector("#cnameerr");
//     const mobileerr=document.querySelector("#cmobileerr");
//     const emailerr=document.querySelector("#cemailerr");
//     const categoryerr=document.querySelector("#ccategoryerr");
//     const funderr=document.querySelector("#cfunderr");
//     const spokeserr=document.querySelector("#cspokeserr");
//     const descriptionerr=document.querySelector("#cdescriptionerr");
//     const cityerr=document.querySelector("#ccityerr");
//     const disterr=document.querySelector("#cdisterr");
//     const stateerr=document.querySelector("#cstateerr");
//     const pinerr=document.querySelector("#cpinerr");


    



//     const regexname=/^[a-zA-Z ]{3,}$/g;
//     const regexmobile=/^[789][\d]{9}$/g;
//     const regexemail=/^[a-zA-Z0-9._]{3,}\@[a-zA-Z]{3,}\.[a-zA-Z.]{2,}$/g;
//     const regexfund=/^[rsRS. ,0-9]{3,}$/g;
//     const regexdesc=/^[a-zA-Z0-9. ,;''""-\/]{10,}$/g;
//     const regexcity=/^[a-zA-Z ]{3,}$/g;
//     const regexdistrict=/^[a-zA-Z -]{3,}$/g;
//     const regexstate=/^[a-zA-Z ]{3,}$/g;
//     const regexpin=/^[0-9]{6}$/g;


    


//     if(regexname.test(name)){
//         nameerr.innerHTML="";
//         nameerr.style.visibility="visible";
//     }else if(name==""){
//         nameerr.innerHTML="** Name Must be Entered **";
//         nameerr.style.visibility="visible";
//         return false;
//     }else{
//         nameerr.innerHTML="** Please Enter a valid name **";
//         nameerr.style.visibility="visible";
//         return false;
//     }


//     if(regexmobile.test(mobile)){
//         mobileerr.innerHTML="";
//         mobileerr.style.visibility="visible";
//     }else if(mobile==""){
//         mobileerr.innerHTML="** Mobile No. cannot be blank **";
//         mobileerr.style.visibility="visible";
//         return false;
//     }else{
//         mobileerr.innerHTML="** Please Enter a valid mobile No. **";
//         mobileerr.style.visibility="visible";
//         return false;
//     }


//     if(regexemail.test(email)){
//         emailerr.innerHTML="";
//         emailerr.style.visibility="visible";
//     }else if(email==""){
//         emailerr.innerHTML="** Email cannot be blank **";
//         emailerr.style.visibility="visible";
//         return false;
//     }else{
//         emailerr.innerHTML="** Please Enter a valid email **";
//         emailerr.style.visibility="visible";
//         return false;
//     }

    

//     if(category.selectedIndex==0){
//         categoryerr.innerHTML="** Category cannot be blank **";
//         categoryerr.style.visibility="visible";
//         return false;
//     }else{
//         categoryerr.innerHTML="";
//         categoryerr.style.visibility="visible";
//     }


//     if(regexfund.test(fund)){
//         funderr.innerHTML="";
//         funderr.style.visibility="visible";
//     }else if(fund==""){
//         funderr.innerHTML="** Fund cannot be blank **";
//         funderr.style.visibility="visible";
//         return false;
//     }else{
//         funderr.innerHTML="** Please Enter a valid Fund **";
//         funderr.style.visibility="visible";
//         return false;
//     }


//     if(spokes.selectedIndex==0){
//         spokeserr.innerHTML="** Spokes cannot be blank **";
//         spokeserr.style.visibility="visible";
//         return false;

//     }else{
//         spokeserr.innerHTML="";
//         spokeserr.style.visibility="visible";
        
//     }



//     if(regexdesc.test(description)){
//         descriptionerr.innerHTML="";
//         descriptionerr.style.visibility="visible";
//     }else if(description==""){
//         descriptionerr.innerHTML="** Description cannot be blank **";
//         descriptionerr.style.visibility="visible";
//         return false;
//     }else{
//         descriptionerr.innerHTML="** Please Enter a valid Description **";
//         descriptionerr.style.visibility="visible";
//         return false;
//     }



//     if(regexcity.test(city)){
//         cityerr.innerHTML="";
//         cityerr.style.visibility="visible";
//     }else if(city==""){
//         cityerr.innerHTML="** City cannot be blank **";
//         cityerr.style.visibility="visible";
//         return false;
//     }else{
//         cityerr.innerHTML="** Please Enter a valid City **";
//         cityerr.style.visibility="visible";
//         return false;
//     }


//     if(regexdistrict.test(district)){
//         disterr.innerHTML="";
//         disterr.style.visibility="visible";
//     }else if(district==""){
//         disterr.innerHTML="** District cannot be blank **";
//         disterr.style.visibility="visible";
//         return false;
//     }else{
//         disterr.innerHTML="** Please Enter a valid District **";
//         disterr.style.visibility="visible";
//         return false;
//     }


//     if(regexstate.test(state)){
//         stateerr.innerHTML="";
//         stateerr.style.visibility="visible";
//     }else if(district==""){
//         stateerr.innerHTML="** State cannot be blank **";
//         stateerr.style.visibility="visible";
//         return false;
//     }else{
//         stateerr.innerHTML="** Please Enter a valid State **";
//         stateerr.style.visibility="visible";
//         return false;
//     }


//     if(regexpin.test(pin)){
//         pinerr.innerHTML="";
//         pinerr.style.visibility="visible";
//     }else if(district==""){
//         pinerr.innerHTML="** Pin cannot be blank **";
//         pinerr.style.visibility="visible";
//         return false;
//     }else{
//         pinerr.innerHTML="** Please Enter a valid Pin **";
//         pinerr.style.visibility="visible";
//         return false;
//     }




//     form.submit();


// }







</script>
<?php include("include/footer.php")?>
<?php
include "db_connect/connection.php"; // Ensure this file correctly sets up $conn


if (isset($_POST['submit'])) {
    // Sanitize and retrieve form data
    $name1 = htmlspecialchars($_POST['name']);
    $adhar = htmlspecialchars($_POST['adhar']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $email1 = htmlspecialchars($_POST['email']);
    $category = htmlspecialchars($_POST['category']);
    $fund = htmlspecialchars($_POST['fund']);
    $spoke = htmlspecialchars($_POST['spokes']);
    $description = htmlspecialchars($_POST['description']);
    $city = htmlspecialchars($_POST['city']);
    $district = htmlspecialchars($_POST['district']);
    $state = htmlspecialchars($_POST['state']);
    $pin = htmlspecialchars($_POST['pin']);

    // Handle image upload
    $uploadSuccess = true;
    $uploadedImages = []; // For storing multiple image names
    $uploadDir = 'campaign_image/';

    // Check if the upload directory exists, create it if not
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    foreach ($_FILES['image']['tmp_name'] as $key => $tmpName) {
        $filename = basename($_FILES['image']['name'][$key]);
        $filePath = $uploadDir . $filename;

        if (move_uploaded_file($tmpName, $filePath)) {
            $uploadedImages[] = $filename; // Store each uploaded file name
        } else {
            $uploadSuccess = false;
            echo "<script>alert('Image upload failed for file: $filename');</script>";
            break;
        }
    }

    if ($uploadSuccess) {
        // Concatenate filenames to store as a single string (if multiple images)
        $imageNames = implode(',', $uploadedImages);

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO `campaign`(`name`, `adhar`,`image`, `mobile`, `email_id`, `category`, `fund_required`, `spokes`, `description`, `city`, `dist`, `state`, `pin`) VALUES (?,?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        if ($stmt === false) {
            die("Error preparing statement: " . $conn->error);
        }
        
        $stmt->bind_param("sssssssssssss", $name1, $adhar, $imageNames, $mobile, $email1, $category, $fund, $spoke, $description, $city, $district, $state, $pin);

        if ($stmt->execute()) {
            echo "<script>
                alert('Form Submitted successfully');
                window.location.assign('./start-campaign.php');
            </script>";
        } else {
            echo "<script>alert('Data failed to insert');</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('One or more images failed to upload');</script>";
    }
}


$conn->close();
?>
