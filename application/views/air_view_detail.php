<div class="container">

</br>
</br>
</br>

<table class="table table-striped">
    
    <tr>
        <td>번호</td><td><?= $result->IDX?></td>
    </tr>
     <tr>
        <td>관할기관</td><td><?= $result->COMP_ORG?></td>
    </tr>
     <tr>
        <td>설치지점명</td><td><?= $result->SET_LOC?></td>
    </tr>
     <tr>
        <td>설치장소</td><td><?= $result->SET_PLACE?></td>
    </tr>
     <tr>
        <td>위치</td><td><?= $result->LOCATION?></td>
    </tr>
     <tr>
        <td>개소</td><td><?= $result->SPOT?></td>
    </tr>
     <tr>
        <td>시행일시</td><td><?= $result->SET_DATE?></td>
    </tr>
     <tr>
        <td>대수(대)</td><td><?= $result->EA_COUNT?></td>
    </tr>
     <tr>
        <td>운영주체</td><td><?= $result->OPERATOR?></td>
    </tr>
     <tr>
        <td>소요예산</td><td><?= $result->NEC_BUDGET?></td>
    </tr>
    <tr>
        <td>주입방식</td><td><?= $result->PUMP_TYPE?></td>
    </tr>
    
    <tr>
        <td>납품업체</td><td><?= $result->SUPPLY_COMP?></td>
    </tr>
    <tr>
        <td>요금유무</td><td><?= $result->PAYMENT?></td>
    </tr>
    <tr>
        <td>운영방법</td><td><?= $result->OPERATE_TYPE?></td>
    </tr>
    <tr>
        <td>구매방법</td><td><?= $result->PURCHASE_TYPE?></td>
    </tr>
    <tr>
        <td>비고</td><td><?= $result->ETC?></td>
    </tr>
    <tr>
        <td>좌표1</td><td><?= $result->POINT?></td>
    </tr>
    <tr>
        <td>좌표2</td><td><?= $result->POINT2?></td>
    </tr>
    
    
    
</table>

<a href="<?= base_url().$recent_url ?>">목록</a>



</div> <!-- /container -->