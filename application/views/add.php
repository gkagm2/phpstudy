
<form action="./add" method="post" class='span10'>
    <!--에러가 발생하면 어디서 발생했는지 확인할 수 있다.-->
    <?php //echo validation_errors();?>
    <!--placeholder는 텍스트입력 영역 안에 반투명하게 텍스트를 띄움-->
    <input type='text' name='title' placeholder='제목' class='span12'/>
    <textarea name="description" placeholder="본문" rows="15" class="span12"></textarea>
    <input type="submit" class="btn"/>
</form>

