<div class="container">

</br>
</br>
</br>
    


<table class="table table-striped">
    
<tr>
    <td>번호</td>
    <td>기관명</td>
    <td>위치</td>
    <td>장소</td>
    <td>지역</td>
  
    
</tr>
    
    
<? foreach($result as $row) : ?>
    
    <tr style="cursor:pointer;" onClick="location.href='/air_view/detail/<?= $row -> IDX ?>'">
            
            <td><?= $row -> IDX ?></td>
            <td><?= $row -> COMP_ORG ?></td>
            <td><?= $row -> SET_LOC ?></td>
            <td><?= $row -> SET_PLACE ?></td>
            <td><?= $row -> LOCATION ?></td>
        
    </tr>
<? endforeach; ?>

</table>

<?PHP echo $pagination; ?>

</div> <!-- /container -->