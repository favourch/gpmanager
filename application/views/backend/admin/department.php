<div class="row">
	<div class="col-md-12">
    
    	<!------CONTROL TABS START------->
		<ul class="nav nav-tabs bordered">
			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="entypo-menu"></i> 
					Departments
                    	</a></li>
			<li>
            	<a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
					Add Department
                    	</a></li>
		</ul>
    	<!------CONTROL TABS END------->
        
		<div class="tab-content">
            <!----TABLE LISTING STARTS--->
            <div class="tab-pane box active" id="list">
				
                <table class="table table-bordered datatable" id="table_export">
                	<thead>
                		<tr>
                    		<th><div>#</div></th>
                    		<th><div>Department Name</div></th>
                    		<th><div>Faculty</div></th>   
                <th><div>Manage </div> </th>
						</tr>
					</thead>
                    <tbody>
                    	<?php $count = 1;foreach($departments as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
							<td><?php echo $row['title'];?></td>
							<td><?php  echo $this->crud_model->get_faculty_name();//echo $this->crud_model->get_faculty($row['facultyId']);?></td>
                                                   
                                                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                    
                                    <!-- EDITING LINK -->
                                    <li>
                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_edit_department/<?php echo $row['id'];?>');">
                                            <i class="entypo-pencil"></i>
                                                <?php echo get_phrase('edit');?>
                                            </a>
                                                    </li>
                                    <li class="divider"></li>
                                    
                                    <!-- DELETION LINK -->
                                    <li>
                                        <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/department/delete/<?php echo $row['id'];?>');">
                                            <i class="entypo-trash"></i>
                                                <?php echo get_phrase('delete');?>
                                            </a>
                                                    </li>
                                </ul>
                            </div>
        					</td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>



			<!----CREATION FORM STARTS---->
			<div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                	<?php echo form_open('admin/department/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                        <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Department Name:</label>
                        
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus required>
                        </div>
                    </div>
                      
                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label">Faculty</label>
                        
                        <div class="col-sm-5">
                            <input readonly name="faculty" value="<?php echo $this->crud_model->get_faculty_name(); ?>" class="form-control"/>
                          <!--  <select type="text" class="form-control" name="facultyId" value="" required>
                                <option></option>
                                <?php 
                                $faculties = $this->db->get("faculty")->result_array();
                                foreach($faculties as $r){ 
                                
                                
                                    echo "<option value='".$r['id']."'>".$r['title']."</option>";
                                    
                                } ?>
                            </select> -->
                        </div> 
                    </div>  
                       
                    
                    
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-info">Add Department</button>
                        </div>
                    </div>
                    </form>                
                </div>                
			</div>
                        
                </div>
        </div>
</div>

  