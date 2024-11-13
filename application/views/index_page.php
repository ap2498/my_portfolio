

<style>
    .thumbnail{
        width:100%;
    }
</style>
<?php $i=1; ?>
<h2 class="title"><?= $title ?></h2>

<?php foreach($projects as $project):?>
    <div class="container">
        <div class="row">
            <div class="col-md-2"><h2><?php echo $i?>:</h2></div>
            
            <div class="col-md-10" style="margin-left:-150px;">
                <h2 class="name"><?php echo $project['project_title'];?></h2>
            </div>
            <br>
        </row>
    
        
            <div>
                <h4 class="header">Description:</h4>
                <p class="content">  <?php
                    // Limit description to 50 characters
                    $description = $project['project_description'];
                    if(strlen($description)>150){
                        echo substr($description,0,150);
                    }
                    else{
                        echo $description;
                    }
                    ?></p>
            </div>
        <div class="row"></div>
            
         <div class="col-md-2">
            <div>
                    
                <img class="thumbnail" src="<?php echo base_url()?>/assets/images/<?php echo $project['thumb_image']?>" alt="">
            </div>
         </div>
            <div class="col-md-10">
                <form action="<?php echo base_url()?>projects/view" method='post'>
                    <div style="text-align:right;">
                        <button id="id" name="id" class="btn btn-primary" style="padding:20px;" value="<?php echo $project['project_id']?>">Read More</button>
                    </div>
                
                </form>
            </div>
        </div>

        
    </div>
    <hr style="width:100%;">
    <?php $i++ ;?>
    <?php endforeach ?>