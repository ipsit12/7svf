<?php include("include/header.php");
include ("db_connect/connection.php");?>

<div style="background-image:url(./assets/images/background/art_culture.jpeg),linear-gradient(to right, rgb(64, 62, 62), rgb(82, 80, 80)); height:auto; background-size: cover; background-blend-mode: overlay; background-position: center center; padding: 50px 0;">

    <section class="view-members-section" style="margin-block:19px; margin-inline:10vw;">

        <div class="member-info-card">
            <div class="member-info-card-content" style="width:100%;">

                <h1 class="text-center fw-bolder category-name" 
                    style="margin-bottom:40px; background:linear-gradient(10deg,red,yellow); 
                    color:transparent; -webkit-background-clip:text; font-family: 'Playfair Display', serif;">
                    Art & Culture
                </h1>
            </div>
        </div>

        <div class="member-info-content-detail" style="margin-top:70px; font-family:'Roboto', sans-serif; line-height:1.8; font-weight:bold;" >

            <p class="highlight-point" style="color:white !important; position:relative; padding-left:20px; margin-bottom:20px;">
                <span style="position:absolute; left:0; top:0;">➤</span>
                Art and culture are a combination of creative endeavors, human behaviors, and beliefs that can take many forms. 
                Art and Culture refer to a belief or practice followed by a group of people for such a long period that it has gained dominance 
                and represents itself as a culture or art for the whole community associated with it. Art Influences Culture, Culture Influences Art.
            </p>
             
            <p class="highlight-point" style="color:white !important; position:relative; padding-left:20px; margin-bottom:20px;" class="mt-3">
                <span style="position:absolute; left:0; top:0;">➤</span>
                Art is a powerful medium through which people and communities may express their cultural identity. Cultural views, values, and experiences 
                can be expressed in creative works, whether in the visual arts, music, dance, literature, or theater. Artists, as cultural ambassadors, 
                have the ability to articulate universal thoughts and experiences that connect with individuals from all walks of life.
            </p>
            
            <p class="highlight-point" style="color:white !important; position:relative; padding-left:20px; margin-bottom:20px;" class="mt-3">
                <span style="position:absolute; left:0; top:0;">➤</span>
                Painting, sculpture, and photography are examples of visual arts that depict cultural identity in real ways. Scenes, concepts, and symbols 
                representing a culture’s legacy are commonly depicted in creative works. Natural elements, ancestral traditions, and spiritual beliefs.
            </p>
            
            <p class="highlight-point" style="color:white !important; position:relative; padding-left:20px; margin-bottom:20px;" class="mt-3">
                <span style="position:absolute; left:0; top:0;">➤</span>
                Dance and music are active cultural manifestations that stir emotions and bring people together. Traditional musical forms (instruments, melodies, and rhythms) 
                have their origins in specific cultural contexts and assist individuals in reconnecting with their roots. Through music and dance performances, multicultural communities 
                may celebrate their individuality while building respect and understanding among diverse groups.
            </p>
            
            <p class="highlight-point" style="color:white !important; position:relative; padding-left:20px; margin-bottom:20px;" class="mt-3">
                <span style="position:absolute; left:0; top:0;">➤</span>
                The literary and theatrical arts provide spaces for narrative exploration of cultural identity. Playwrights draw on their cultural background and personal experiences to develop plays 
                that highlight the complexities and challenges of multicultural society.
            </p>
            
            <p class="highlight-point" style="color:white !important; position:relative; padding-left:20px; margin-bottom:20px;" class="mt-3">
                <span style="position:absolute;left:0; top:0;">➤</span>
                The culture of India is adopted by people outside India as well; the spread of Hinduism across the sea, the spread of Indian cuisines, 
                and the demand for Indian fashion are proof that the world is highly influenced by our beliefs, our culture, and our practices. 
                Our spiritual beliefs have always been a centre of attraction for the world, and this is proved by the number of visitors India has every year, 
                which is rapidly increasing.
            </p>

        </div>

    </section>

</div>

<?php include("include/footer.php")?>

<style>
    .highlight-point:hover {
        background-color: rgba(255, 255, 255, 0.1);
        color: #FFD700; /* Gold color for the text */
        cursor: pointer;
        transition: background-color 0.3s ease, color 0.3s ease;
    }
</style>
