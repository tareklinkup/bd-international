<style>
.inline-radio {
    display: inline;
}

#branch .Inactive {
    color: red;
}
</style>
<div class="row">
    <div class="col-xs-12">
        <div class="col-sm-4 col-sm-offset-1">
            <?php if($selected){ ?>
            <form class="form-vertical" method="post" enctype="multipart/form-data"
                action="<?php echo base_url(); ?>company_profile_Update">
                <div class="form-group">
                    <label class="control-label" for="">Company Logo</label>
                    <div class="col-sm-12">
                        <div class="left">
                            <?php if($selected->Company_Logo_thum != "") {?>
                            <img id="hideid"
                                src="<?php echo base_url().'uploads/company_profile_thum/'.$selected->Company_Logo_thum; ?>"
                                alt="" style="width:100px">
                            <?php } else{ ?>
                            <img id="hideid" src="<?php echo base_url();?>images/No-Image-.jpg" alt=""
                                style="width:200px">
                            <?php } ?>
                            <img id="preview" src="#" style="width:100px;height:100px" hidden>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label" for="companyLogo">Change Logo</label>
                    <div>
                        <input name="companyLogo" id="companyLogo" type="file" onchange="readURL(this)"
                            class="form-control" style="height:35px;" />
                    </div>
                </div>

                <div class="form-group" style="margin-top:15px">
                    <label class="control-label" for="form-field-1"> Company Name </label>
                    <div>
                        <input name="Company_name" type="text" id="Company_name"
                            value="<?php echo $selected->Company_Name; ?>" class="form-control" />
                        <input name="iidd" type="hidden" id="iidd" value="<?php echo $selected->Company_SlNo; ?>"
                            class="txt" />
                    </div>
                </div>

                <div class="form-group" style="margin-top:15px">
                    <label class="control-label" for="form-field-1"> Description </label>
                    <div>
                        <textarea id="Description" name="Description"
                            class="form-control"><?php echo $selected->Repot_Heading; ?></textarea>
                    </div>
                </div>

                <div class="form-group" style="margin-top:15px">
                    <label class="control-label" for="form-field-1"> Terms & Condition </label>
                    <div>
                        <textarea id="terms_condition" name="terms_condition"
                            class="form-control"><?php echo $selected->terms_condition; ?></textarea>
                    </div>
                </div>

                <div class="control-group" style="margin-top:15px;">
                    <label class="col-sm-12 control-label bolder blue">Invoice Print Type</label>
                    <div class="radio inline-radio">
                        <label>
                            <input name="inpt" id="a4" type="radio" value="1"
                                <?php if($selected->print_type==1){ echo "checked"; } ?> class="ace" />
                            <span class="lbl"> A4 Size</span>
                        </label>
                    </div>

                    <div class="radio inline-radio">
                        <label>
                            <input name="inpt" id="a42" type="radio" value="2"
                                <?php if($selected->print_type==2){ echo "checked"; } ?> class="ace" />
                            <span class="lbl"> 1/2 of A4 Size</span>
                        </label>
                    </div>

                    <div class="radio inline-radio">
                        <label>
                            <input name="inpt" id="pos" type="radio" value="3"
                                <?php if($selected->print_type==3){ echo "checked"; } ?> class="ace" />
                            <span class="lbl"> POS </span>
                        </label>
                    </div>
                </div>

                <div class="form-group" style="margin-top:15px;">
                    <label class="col-sm-4 control-label" for=""> </label>
                    <label class="col-sm-1 control-label"></label>
                    <div class="col-sm-6">
                        <button type="submit" name="btnSubmit" title="Update" class="btn btn-sm btn-info pull-left">
                            Update
                            <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                        </button>

                    </div>
                </div>
            </form>
            <?php 
		}else{
		?>

            <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>company_profile_insert">
                <div class="form-group">
                    <label class="col-sm-12 control-label" for="pro_Name">Company Logo</label>
                    <div class="col-sm-12">
                        <img id="hideid" src="<?php echo base_url();?>images/No-Image-.jpg" alt="" style="width:100px">
                        <img id="preview" src="#" style="width:100px;height:100px" hidden>
                    </div>
                </div>

                <!-- <div class="form-group"> -->
                <label class="col-sm-12 control-label" for="pro_Name">Change Logo</label>
                <!-- <div class="col-sm-12"> -->
                <input name="companyLogo" required id="companyLogo" type="file" class="form-control"
                    style="height:35px;" />
                <!-- </div> -->
                <!-- </div> -->

                <div class="form-group">
                    <label class="col-sm-12 control-label" for="form-field-1" style="margin-top:15px;"> Company Name
                    </label>
                    <div class="col-sm-12">
                        <input name="Company_name" type="text" id="Company_name" value="" class="form-control" />
                        <input name="iidd" type="hidden" id="iidd" value="" class="txt" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label" for="form-field-1" style="margin-top:15px;"> Description </label>
                    <div>
                        <textarea id="Description" name="Description" class="form-control"></textarea>
                    </div>
                </div>

                <div class="control-group" style="margin-top:15px;">
                    <label class="col-sm-12 control-label bolder blue">Invoice Print Type</label>
                    <div class="radio inline-radio">
                        <label>
                            <input name="inpt" id="a4" type="radio" value="1" class="ace" />
                            <span class="lbl"> A4 Size</span>
                        </label>
                    </div>

                    <div class="radio inline-radio">
                        <label>
                            <input name="inpt" id="a42" type="radio" value="2" class="ace" />
                            <span class="lbl"> 1/2 of A4 Size</span>
                        </label>
                    </div>

                    <div class="radio inline-radio">
                        <label>
                            <input name="inpt" id="pos" type="radio" value="3" class="ace" />
                            <span class="lbl"> POS </span>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for=""> </label>
                    <label class="col-sm-1 control-label"></label>
                    <div class="col-sm-6">
                        <button type="submit" name="btnSubmit" title="Update" class="btn btn-sm btn-success pull-left">
                            Save
                            <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                        </button>

                    </div>
                </div>
            </form>
            <?php
		}
		?>
        </div>
        <div class="col-sm-6 col-sm-offset-1">
            <div id="branch">
                <div class="row" style="margin-top: 15px;">
                    <div class="col-md-12">
                        <form class="form-horizontal" @submit.prevent="saveBranch">
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right"> Branch Name </label>
                                <label class="col-sm-1 control-label no-padding-right">:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="Branch Name" class="form-control"
                                        v-model="branch.name" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right"> Branch Title </label>
                                <label class="col-sm-1 control-label no-padding-right">:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="Branch Title" class="form-control"
                                        v-model="branch.title" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right"> BIN </label>
                                <label class="col-sm-1 control-label no-padding-right">:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="Branch BIN" class="form-control"
                                        v-model="branch.bin" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right"> Branch Address </label>
                                <label class="col-sm-1 control-label no-padding-right">:</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" placeholder="Branch Address" v-model="branch.address"
                                        required></textarea>
                                </div>
                            </div>


                            <!-- header and footer -->
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right"> Header Image <br> (600 X 100)
                                    px</label>
                                <label class="col-sm-1 control-label no-padding-right">:</label>
                                <div class="col-sm-8">
                                    <input type="file" id="headerImage" name="headerImage" :ref="'image'"
                                        @change="previewImage" class="form-control" style="height: 35px;">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div style="float:right">
                                        <div style="width: 100px; height:100px;border: 1px solid #ccc;overflow:hidden;">
                                            <img id="customerImage"
                                                v-if="imageUrlHeader == '' || imageUrlHeader == null"
                                                src="/assets/no_image.gif" style="width: 100px;height:100px">
                                            <img id="customerImage"
                                                v-if="imageUrlHeader != '' && imageUrlHeader != null"
                                                v-bind:src="imageUrlHeader" style="width: 100px;height:100px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- close Header Image -->

                            <div class="form-group" style="margin-top:5px">
                                <div class="col-sm-12">
                                    <div style="float:right">
                                        <button type="submit" class="btn btn-sm btn-success">
                                            Submit
                                            <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row" style="margin-top: 20px;display:none;"
                    v-bind:style="{display: branches.length > 0 ? '' : 'none'}">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Branch Name</th>
                                    <th>Branch Title</th>
                                    <th>BIN</th>
                                    <th>Branch Address</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(branch, sl) in branches">
                                    <td>{{ sl + 1 }}</td>
                                    <td>{{ branch.Brunch_name }}</td>
                                    <td>{{ branch.Brunch_title }}</td>
                                    <td>{{ branch.bin }}</td>
                                    <td>{{ branch.Brunch_address }}</td>
                                    <td><span v-bind:class="branch.active_status">{{ branch.active_status }}</span></td>
                                    <td>
                                        <?php if($this->session->userdata('accountType') != 'u'){?>
                                        <a href="" title="Edit Branch" @click.prevent="editBranch(branch)"><i
                                                class="fa fa-pencil"></i></a>&nbsp;
                                        <a href="" title="Deactive Branch" v-if="branch.status == 'a'"
                                            @click.prevent="changeStatus(branch.brunch_id)"><i
                                                class="fa fa-trash"></i></a>
                                        <a href="" title="Active Branch" v-else><i class="fa fa-check"
                                                @click.prevent="changeStatus(branch.brunch_id)"></i></a>
                                        <?php }?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url();?>assets/js/vue/vue.min.js"></script>
<script src="<?php echo base_url();?>assets/js/vue/axios.min.js"></script>

<script>
new Vue({
    el: '#branch',
    data() {
        return {
            branch: {
                branchId: 0,
                name: '',
                title: '',
                address: '',
                bin: '',
            },
            branches: [],
            header_logo: null,
            imageUrlHeader: ''
        }
    },
    created() {
        this.getBranches();
    },
    methods: {
        getBranches() {
            axios.get('/get_branches').then(res => {
                this.branches = res.data;
            })
        },
        previewImage() {
            if (event.target.files.length > 0) {
                this.header_logo = event.target.files[0];
                this.imageUrlHeader = URL.createObjectURL(this.header_logo);
            } else {
                this.header_logo = null;
                this.imageUrlHeader = null;
            }
        },
        saveBranch() {
            let url = "/add_branch";
            if (this.branch.branchId != 0) {
                url = "/update_branch";
            }
            let formData = new FormData();
            formData.append("headerImage", this.header_logo);
            formData.append("data", JSON.stringify(this.branch));
            axios.post(url, formData).then(res => {
                let r = res.data;
                alert(r.message);
                if (r.success) {
                    this.getBranches();
                    this.clearForm();
                }
            })
        },

        editBranch(branch) {
            this.branch.branchId = branch.brunch_id;
            this.branch.name = branch.Brunch_name;
            this.branch.title = branch.Brunch_title;
            this.branch.bin = branch.bin;
            this.branch.address = branch.Brunch_address;
            if (branch.header_logo == null || branch.header_logo == '') {
                this.imageUrlHeader = null;
            } else {
                this.imageUrlHeader = branch.header_logo;
            }
        },

        changeStatus(branchId) {
            let changeConfirm = confirm('Are you sure?');
            if (changeConfirm == false) {
                return;
            }
            axios.post('/change_branch_status', {
                branchId: branchId
            }).then(res => {
                let r = res.data;
                alert(r.message);
                if (r.success) {
                    this.getBranches();
                }
            })
        },

        clearForm() {
            this.branch = {
                branchId: 0,
                name: '',
                title: '',
                bin: '',
                address: ''
            }
            this.imageUrlFooter = '';
            this.imageUrlHeader = '';
        }
    }
})
</script>

<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('preview').src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
        $("#hideid").hide();
        $("#preview").show();
    }
}
</script>

<script type="text/javascript">
function Employee_submit() {
    var logo = $('#companyLogo').val();
    alert(logo);
    if (logo == "") {
        alert('Please Select a logo')
        return false;
    }
    var Company_name = $("#Company_name").val();
    var inpt = $('input[name=inpt]:checked').val();
    //alert(inpt);
    if (Company_name == "") {
        $("#Company_name").css('border-color', 'red');
        return false;
    }
    var fd = new FormData();
    var Description = CKEDITOR.instances['Description'].getData();
    var Description = encodeURIComponent(Description);
    fd.append('companyLogo', $('#companyLogo')[0].files[0]);
    fd.append('Company_name', $('#Company_name').val());
    fd.append('Description', Description);
    fd.append('inpt', inpt);
    fd.append('iidd', $('#iidd').val());


    var x = $.ajax({
        url: "<?php echo base_url();?>Administrator/page/company_profile_Update/",
        type: "POST",
        data: fd,
        enctype: 'multipart/form-data',
        processData: false,
        contentType: false,
        success: function(data) {
            //$("#Company").html(data);
            alert("Update Success");
            //setTimeout( function() {$.fancybox.close(); },1200);
            location.reload();
        }
    });
}



$(function() {
    $('.froala-editor').froalaEditor()
});
</script>
<!-- TextArea editor -->
<script type='text/javascript' src='<?php echo base_url(); ?>ckeditor/ckeditor.js'></script>

<script type="text/javascript">
CKEDITOR.replace('Description');
</script>
<!-- end TextArea editor -->