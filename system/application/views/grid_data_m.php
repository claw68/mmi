<div class="a_grid_male">      
  <table id="a_grid_m" class="scroll" cellpadding="0" cellspacing="0" style="cursor: pointer; -moz-user-select: none;">
  </table>
<div id="grid_script_m"></div>
                     
<script type="text/javascript">                      
    $("#a_grid_m").jqGrid({
            scrollrows: true,
            url:'?mmi_c/admin_grid_data_m',
            datatype: "json",
            colNames:['Contestant Number',<?php foreach($crit as $row){?>'<?php echo $row->crit_name?>',<?php } ?>'Total','Rank'],
            colModel:[
                    {name:'num',index:'num',sortable: true,align:"center", sorttype:'int'},
                    <?php foreach($crit as $row){?>
                    {name:'crit_<?php echo $row->crit_id?>',index:'crit_<?php echo $row->crit_id?>',align:"center", sortable: true,sorttype:'int'},
                    <?php } ?>
                    {name:'total',index:'total',sortable: true,align:"center", sorttype:'int'},
                    {name:'rank',index:'rank',sortable: true,align:"center", sorttype:'int'},
            ],
            mtype: "POST",
            postData:{passvalue1: $("#event_id").val(), passvalue2: $("#judge_id").val()},
            imgpath: gridimgpath, 
            sortname: 'id',
            rownumbers: true,
            loadonce: true, 
            viewrecords: true, 
            sortorder: "desc", 
            caption:"MALE",
            height: '340',
            width: '950',
            loadComplete:function(){
            }
    });
</script>
</div>  