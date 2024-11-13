<div class="container" style="padding:20px;">
    <img style="width:100%;heightt:auto;" src="<?php echo base_url()?>assets/images/<?php echo $image['image']?>" alt="">
    <div>
        <br>
        <form action="<?php echo base_url()?>projects/view" method='post'>
            <input id="id" name="id" type="hidden" value="<?php echo $image['project_id']?>">
            <button class="btn btn-primary" type="submit">Go Back</button>
        </form>
    </div>
</div>
