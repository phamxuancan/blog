<div class='col-lg-5 col-lg-offset-4'>
    <div class="panel panel-primary" style='margin-top:50px;'>
         <div class="panel-heading">
             <h3 class="panel-title "><?php echo __('title_add_post') ?></h3>
        </div>
            <div class="panel-body">
                <?php
                    echo $this->Form->create('Post');
                    echo $this->Form->input('title',array('class'=>'form-control'));
                    echo $this->Form->input('body', array('rows' => '2','class'=>'form-control'));
                    echo $this->Form->end(__('btn_save_post'));
                ?>
            </div>
    </div>
</div>