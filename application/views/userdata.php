<section>
    <article>
        <h1>
            <?= __('contactUs') ?>
        </h1>
        <?= Form::open() ?>
            <?php if (isset($errors) && isset($dataPost['name']) || isset($errorDb)): ?>
            	<div id='errorZone'>
                    <p class="message"><?= __('someError')?></p>
                    <ul class="errors">
                        <?php foreach ($errors as $message): ?>
                            <li><?= $message ?></li>
                        <?php endforeach ?>
                    </ul>
                    
                    <?php if (isset($errorDb)): ?>
                        <?= $errorDb[0] ?>
                    <?php endif ?>
                 </div>
            <?php endif ?>
            <dl>
                <dd><?= Form::input('name', isset($dataPost['name'])?$dataPost['name']:'',array('placeholder="*'.__('name').'"', (isset($errors['name'])&& isset($dataPost['name']))?"class='error'":"class='true'"))?></dd>
                <dd><?= Form::input('surname',isset($dataPost['surname'])?$dataPost['surname']:'',array('placeholder="*'.__('surname').'"', (isset($errors['surname'])&& isset($dataPost['name']))?"class='error'":"class='true'"))?></dd>
                <dd><?= Form::input('mail',isset($dataPost['mail'])?$dataPost['mail']:'',array('placeholder="*'.__('mail').'"', (isset($errors['mail'])&& isset($dataPost['name']))?"class='error'":"class='true'"))?></dd>
                <dd><?= Form::input('birthday',isset($dataPost['birthday'])?$dataPost['birthday']:"",array('placeholder="'.__('birthday').'"', (isset($errors['birthday'])&& isset($dataPost['name']))?"class='error'":"class='true'"))?></dd>
                <dd><?= Form::input('phone',isset($dataPost['phone'])?$dataPost['phone']:'',array('placeholder="'.__('phone').'"', (isset($errors['phone'])&& isset($dataPost['name']))?"class='error'":"class='true'"))?></dd>
                <?= Form::textarea('text',isset($dataPost['text'])?$dataPost['text']:'',array('placeholder="*'.__('text').' ..."', (isset($errors['text'])&& isset($dataPost['name']))?"class='error'":"class='true'"))?></dd>
            </dl>
            <dt>
            	<?= Form::label('info', '* : '.__("infosup"))?>
            </dt>
            <?= Form::submit(NULL, strtoupper(__('send'))) ?>
        <?= Form::close() ?> 
     </article>
</section>