<style>


.project_img {
    width: 75%; /* Adjust as needed */
    height: auto; /* Maintain aspect ratio */
    transition: transform 0.3s ease; /* Smooth transition */
    display: block; /* Ensures proper alignment */
    margin: 0 auto; /* Centers the image within the column */
}



</style>
<div class="container">
    <h2 class="title"><?= $project[0]['project_title']; ?></h2>
    <div>
        <h4 class="header">Description:</h4>
        <p class="content"><?= $project[0]['project_description']; ?></p>
    </div>
    <div>
        <h5 class="company">Software developed for <?= $project[0]['project_company']; ?></h5>
    </div>
    <br>
    <?php if (!empty($project[0]['project_url'])) : ?>
        <div>
            <h4 class="header">Project URL:</h4>
            <p class="content"><?= $project[0]['project_url']; ?></p>
        </div>
    <?php endif ?>
    <?php if (!empty($project[0]['project_notes'])) : ?>
        <div>
            <h4 class="header">Project Notes:</h4>
            <p class="content"><?= $project[0]['project_notes']; ?></p>
        </div>
    <?php endif ?>
    <div>
    <h4 class="header">Images: <span style="font-size:16px;">"Click Image to enlarge"</span></h4>
    
    <?php if (!empty($project)): // Check if the project array is not empty ?>
        <div class="row">
            <?php foreach ($project as $image): // Loop through the images array ?>
                <div class="col-lg-2 col-md-2 col-sm-6 col-4">
                    <form action="<?php echo site_url('projects/view_image'); ?>" method="post">
                        <input type="hidden" name="id" value="<?php echo $image['image_id']; ?>">
                        <button  type="submit" style="border: none; background: none; padding: 0;">
                            <img class="project_img" src="<?= base_url() ?>assets/images/<?= $image['image'] ?>" alt="Project Image">
                        </button>
                    </form>
                </div>
                <br><br><br>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p class="content">No images available for this project.</p>
    <?php endif; ?>
</div>
</div>
