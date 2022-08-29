<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tool Project Management</title>
    <link href="<?php echo base_url('/assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('/assets/css/font-awesome.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('/assets/css/style.css'); ?>" rel="stylesheet" />
    <script src="<?php echo base_url('/assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/axios.min.js'); ?>" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<script>
    function getLoading() {
        let tool_code = $("#tool_code").text();

        axios.get(`http://localhost:3000/api/toolControl/${tool_code}`, {
                headers: {
                    'Content-Type': 'application/json',
                    'key': '12345'
                }
            })
            .then(function(response) {
                console.log(response.data);

                if (response.data.mc01 == 2) {
                    $('#load_mc01').removeClass().addClass('btn btn-success');
                    $('#load_mc01').prop('disabled', true);
                } else if (response.data.mc01 == 1) {
                    $('#load_mc01').removeClass().addClass('btn btn-warning');
                } else {
                    $('#load_mc01').addClass('btn btn-light');
                    $('#load_mc01').prop('disabled', true);
                }

                if (response.data.mc02 == 2) {
                    $('#load_mc02').removeClass().addClass('btn btn-success');
                    $('#load_mc02').prop('disabled', true);
                } else if (response.data.mc02 == 1) {
                    $('#load_mc02').removeClass().addClass('btn btn-warning');
                } else {
                    $('#load_mc02').addClass('btn btn-light');
                    $('#load_mc02').prop('disabled', true);
                }

                if (response.data.mc03 == 2) {
                    $('#load_mc03').removeClass().addClass('btn btn-success');
                    $('#load_mc03').prop('disabled', true);
                } else if (response.data.mc03 == 1) {
                    $('#load_mc03').removeClass().addClass('btn btn-warning');
                } else {
                    $('#load_mc03').addClass('btn btn-light');
                    $('#load_mc03').prop('disabled', true);
                }

                if (response.data.wc01 == 2) {
                    $('#load_wc01').removeClass().addClass('btn btn-success');
                    $('#load_wc01').prop('disabled', true);
                } else if (response.data.wc01 == 1) {
                    $('#load_wc01').removeClass().addClass('btn btn-warning');
                } else {
                    $('#load_wc01').addClass('btn btn-light');
                    $('#load_wc01').prop('disabled', true);
                }

                if (response.data.wc02 == 2) {
                    $('#load_wc02').removeClass().addClass('btn btn-success');
                    $('#load_wc02').prop('disabled', true);
                } else if (response.data.wc02 == 1) {
                    $('#load_wc02').removeClass().addClass('btn btn-warning');
                } else {
                    $('#load_wc02').addClass('btn btn-light');
                    $('#load_wc02').prop('disabled', true);
                }

                if (response.data.wc03 == 2) {
                    $('#load_wc03').removeClass().addClass('btn btn-success');
                    $('#load_wc03').prop('disabled', true);
                } else if (response.data.wc03 == 1) {
                    $('#load_wc03').removeClass().addClass('btn btn-warning');
                } else {
                    $('#load_wc03').addClass('btn btn-light');
                    $('#load_wc03').prop('disabled', true);
                }

                if (response.data.wc04 == 2) {
                    $('#load_wc04').removeClass().addClass('btn btn-success');
                    $('#load_wc04').prop('disabled', true);
                } else if (response.data.wc04 == 1) {
                    $('#load_wc04').removeClass().addClass('btn btn-warning');
                } else {
                    $('#load_wc04').addClass('btn btn-light');
                    $('#load_wc04').prop('disabled', true);
                }

                if (response.data.sg == 2) {
                    $('#load_sg').removeClass().addClass('btn btn-success');
                    $('#load_sg').prop('disabled', true);
                } else if (response.data.sg == 1) {
                    $('#load_sg').removeClass().addClass('btn btn-warning');
                } else {
                    $('#load_sg').addClass('btn btn-light');
                    $('#load_sg').prop('disabled', true);
                }

                if (response.data.edm == 2) {
                    $('#load_edm').removeClass().addClass('btn btn-success');
                    $('#load_edm').prop('disabled', true);
                } else if (response.data.edm == 1) {
                    $('#load_edm').removeClass().addClass('btn btn-warning');
                } else {
                    $('#load_edm').addClass('btn btn-light');
                    $('#load_edm').prop('disabled', true);
                }

                if (response.data.oh == 2) {
                    $('#load_oh').removeClass().addClass('btn btn-success');
                    $('#load_oh').prop('disabled', true);
                } else if (response.data.oh == 1) {
                    $('#load_oh').removeClass().addClass('btn btn-warning');
                } else {
                    $('#load_oh').addClass('btn btn-light');
                    $('#load_oh').prop('disabled', true);
                }

                $('#part_no').text(response.data.part_name);

            })
            .catch(function(error) {
                console.log(error);
            });
    }

    function getMachining() {
        let tool_code = $("#tool_code").text();

        axios.get(`http://localhost:3000/api/toolControl/${tool_code}`, {
                headers: {
                    'Content-Type': 'application/json',
                    'key': '12345'
                }
            })
            .then(function(response) {
                console.log(response.data);

                if (response.data.mach_mc01 == 2) {
                    $('#mach_mc01').removeClass().addClass('btn btn-success');
                    $('#mach_mc01').prop('disabled', true);
                } else if (response.data.mach_mc01 == 1) {
                    $('#mach_mc01').removeClass().addClass('btn btn-warning');
                } else {
                    $('#mach_mc01').addClass('btn btn-light');
                    $('#mach_mc01').prop('disabled', true);
                }

                if (response.data.mach_mc02 == 2) {
                    $('#mach_mc02').removeClass().addClass('btn btn-success');
                    $('#mach_mc02').prop('disabled', true);
                } else if (response.data.mach_mc02 == 1) {
                    $('#mach_mc02').removeClass().addClass('btn btn-warning');
                } else {
                    $('#mach_mc02').addClass('btn btn-light');
                    $('#mach_mc02').prop('disabled', true);
                }

                if (response.data.mach_mc03 == 2) {
                    $('#mach_mc03').removeClass().addClass('btn btn-success');
                    $('#mach_mc03').prop('disabled', true);
                } else if (response.data.mach_mc03 == 1) {
                    $('#mach_mc03').removeClass().addClass('btn btn-warning');
                } else {
                    $('#mach_mc03').addClass('btn btn-light');
                    $('#mach_mc03').prop('disabled', true);
                }

                if (response.data.mach_wc01 == 2) {
                    $('#mach_wc01').removeClass().addClass('btn btn-success');
                    $('#mach_wc01').prop('disabled', true);
                } else if (response.data.mach_wc01 == 1) {
                    $('#mach_wc01').removeClass().addClass('btn btn-warning');
                } else {
                    $('#mach_wc01').addClass('btn btn-light');
                    $('#mach_wc01').prop('disabled', true);
                }

                if (response.data.mach_wc02 == 2) {
                    $('#mach_wc02').removeClass().addClass('btn btn-success');
                    $('#mach_wc02').prop('disabled', true);
                } else if (response.data.mach_wc02 == 1) {
                    $('#mach_wc02').removeClass().addClass('btn btn-warning');
                } else {
                    $('#mach_wc02').addClass('btn btn-light');
                    $('#mach_wc02').prop('disabled', true);
                }

                if (response.data.mach_wc03 == 2) {
                    $('#mach_wc03').removeClass().addClass('btn btn-success');
                    $('#mach_wc03').prop('disabled', true);
                } else if (response.data.mach_wc03 == 1) {
                    $('#mach_wc03').removeClass().addClass('btn btn-warning');
                } else {
                    $('#mach_wc03').addClass('btn btn-light');
                    $('#mach_wc03').prop('disabled', true);
                }

                if (response.data.mach_wc04 == 2) {
                    $('#mach_wc04').removeClass().addClass('btn btn-success');
                    $('#mach_wc04').prop('disabled', true);
                } else if (response.data.mach_wc04 == 1) {
                    $('#mach_wc04').removeClass().addClass('btn btn-warning');
                } else {
                    $('#mach_wc04').addClass('btn btn-light');
                    $('#mach_wc04').prop('disabled', true);
                }

                if (response.data.mach_sg == 2) {
                    $('#mach_sg').removeClass().addClass('btn btn-success');
                    $('#mach_sg').prop('disabled', true);
                } else if (response.data.mach_sg == 1) {
                    $('#mach_sg').removeClass().addClass('btn btn-warning');
                } else {
                    $('#mach_sg').addClass('btn btn-light');
                    $('#mach_sg').prop('disabled', true);
                }

                if (response.data.mach_edm == 2) {
                    $('#mach_edm').removeClass().addClass('btn btn-success');
                    $('#mach_edm').prop('disabled', true);
                } else if (response.data.mach_edm == 1) {
                    $('#mach_edm').removeClass().addClass('btn btn-warning');
                } else {
                    $('#mach_edm').addClass('btn btn-light');
                    $('#mach_edm').prop('disabled', true);
                }

                if (response.data.mach_oh == 2) {
                    $('#mach_oh').removeClass().addClass('btn btn-success');
                    $('#mach_oh').prop('disabled', true);
                } else if (response.data.mach_oh == 1) {
                    $('#mach_oh').removeClass().addClass('btn btn-warning');
                } else {
                    $('#mach_oh').addClass('btn btn-light');
                    $('#mach_oh').prop('disabled', true);
                }

                $('#part_no').text(response.data.part_name);

            })
            .catch(function(error) {
                console.log(error);
            });
    }

    function updateStatusloading() {

        var tool_code = $("#tool_code").text();

        axios.get(`http://localhost:3000/api/toolControl/${tool_code}`, {
                headers: {
                    'Content-Type': 'application/json',
                    'key': '12345'
                }
            })
            .then(function(response) {
                console.log(response.data);

                var mc01 = response.data.mc01;
                var mc02 = response.data.mc02;
                var mc03 = response.data.mc03;
                var wc01 = response.data.wc01;
                var wc02 = response.data.wc02;
                var wc03 = response.data.wc03;
                var wc04 = response.data.wc04;
                var edm = response.data.edm;
                var sg = response.data.sg;
                var oh = response.data.oh;

                var load_mc01_class = $('#load_mc01').attr('class');
                var load_mc02_class = $('#load_mc02').attr('class');
                var load_mc03_class = $('#load_mc03').attr('class');
                var load_wc01_class = $('#load_wc01').attr('class');
                var load_wc02_class = $('#load_wc02').attr('class');
                var load_wc03_class = $('#load_wc03').attr('class');
                var load_wc04_class = $('#load_wc04').attr('class');
                var load_edm_class = $('#load_edm').attr('class');
                var load_sg_class = $('#load_sg').attr('class');
                var load_oh_class = $('#load_oh').attr('class');

                if (load_mc01_class == 'btn btn-warning') {
                    mc01 = 1;
                } else if (load_mc01_class == 'btn btn-success') {
                    mc01 = 2;
                } else {
                    mc01 = mc01;
                }

                if (load_mc02_class == 'btn btn-warning') {
                    mc02 = 1;
                } else if (load_mc02_class == 'btn btn-success') {
                    mc02 = 2;
                } else {
                    mc02 = mc02;
                }

                if (load_mc03_class == 'btn btn-warning') {
                    mc03 = 1;
                } else if (load_mc03_class == 'btn btn-success') {
                    mc03 = 2;
                } else {
                    mc03 = mc03;
                }

                if (load_wc01_class == 'btn btn-warning') {
                    wc01 = 1;
                } else if (load_wc01_class == 'btn btn-success') {
                    wc01 = 2;
                } else {
                    wc01 = wc01;
                }

                if (load_wc02_class == 'btn btn-warning') {
                    wc02 = 1;
                } else if (load_wc02_class == 'btn btn-success') {
                    wc02 = 2;
                } else {
                    wc02 = wc02;
                }

                if (load_wc03_class == 'btn btn-warning') {
                    wc03 = 1;
                } else if (load_wc03_class == 'btn btn-success') {
                    wc03 = 2;
                } else {
                    wc03 = wc03;
                }

                if (load_wc04_class == 'btn btn-warning') {
                    wc04 = 1;
                } else if (load_wc04_class == 'btn btn-success') {
                    wc04 = 2;
                } else {
                    wc04 = wc04;
                }

                if (load_edm_class == 'btn btn-warning') {
                    edm = 1;
                } else if (load_edm_class == 'btn btn-success') {
                    edm = 2;
                } else {
                    edm = edm;
                }

                if (load_sg_class == 'btn btn-warning') {
                    sg = 1;
                } else if (load_sg_class == 'btn btn-success') {
                    sg = 2;
                } else {
                    sg = sg;
                }

                if (load_oh_class == 'btn btn-warning') {
                    oh = 1;
                } else if (load_oh_class == 'btn btn-success') {
                    oh = 2;
                } else {
                    oh = oh;
                }

                var myUrl = `http://localhost:3000/api/toolControl/loading/${tool_code}`;
                var myData = {
                    mc01: mc01,
                    mc02: mc02,
                    mc03: mc03,
                    wc01: wc01,
                    wc02: wc02,
                    wc03: wc03,
                    wc04: wc04,
                    edm: edm,
                    sg: sg,
                    oh: oh,
                };

                axios.patch(
                        myUrl, myData, {
                            headers: {
                                'Content-Type': 'application/json',
                                'key': '12345'
                            }
                        })
                    .then(function(response) {
                        console.log(response);
                    })
                    .catch(function(error) {
                        console.log(error);
                    });

            })
            .catch(function(error) {
                console.log(error);
            });
    }

    function updateStatusMachining() {

        var tool_code = $("#tool_code").text();

        axios.get(`http://localhost:3000/api/toolControl/${tool_code}`, {
                headers: {
                    'Content-Type': 'application/json',
                    'key': '12345'
                }
            })
            .then(function(response) {
                console.log(response.data);

                var mc01 = response.data.mach_mc01;
                var mc02 = response.data.mach_mc02;
                var mc03 = response.data.mach_mc03;
                var wc01 = response.data.mach_wc01;
                var wc02 = response.data.mach_wc02;
                var wc03 = response.data.mach_wc03;
                var wc04 = response.data.mach_wc04;
                var edm = response.data.mach_edm;
                var sg = response.data.mach_sg;
                var oh = response.data.mach_oh;

                var mach_mc01_class = $('#mach_mc01').attr('class');
                var mach_mc02_class = $('#mach_mc02').attr('class');
                var mach_mc03_class = $('#mach_mc03').attr('class');
                var mach_wc01_class = $('#mach_wc01').attr('class');
                var mach_wc02_class = $('#mach_wc02').attr('class');
                var mach_wc03_class = $('#mach_wc03').attr('class');
                var mach_wc04_class = $('#mach_wc04').attr('class');
                var mach_edm_class = $('#mach_edm').attr('class');
                var mach_sg_class = $('#mach_sg').attr('class');
                var mach_oh_class = $('#mach_oh').attr('class');

                if (mach_mc01_class == 'btn btn-warning') {
                    mc01 = 1;
                } else if (mach_mc01_class == 'btn btn-success') {
                    mc01 = 2;
                } else {
                    mc01 = mc01;
                }

                if (mach_mc02_class == 'btn btn-warning') {
                    mc02 = 1;
                } else if (mach_mc02_class == 'btn btn-success') {
                    mc02 = 2;
                } else {
                    mc02 = mc02;
                }

                if (mach_mc03_class == 'btn btn-warning') {
                    mc03 = 1;
                } else if (mach_mc03_class == 'btn btn-success') {
                    mc03 = 2;
                } else {
                    mc03 = mc03;
                }

                if (mach_wc01_class == 'btn btn-warning') {
                    wc01 = 1;
                } else if (mach_wc01_class == 'btn btn-success') {
                    wc01 = 2;
                } else {
                    wc01 = wc01;
                }

                if (mach_wc02_class == 'btn btn-warning') {
                    wc02 = 1;
                } else if (mach_wc02_class == 'btn btn-success') {
                    wc02 = 2;
                } else {
                    wc02 = wc02;
                }

                if (mach_wc03_class == 'btn btn-warning') {
                    wc03 = 1;
                } else if (mach_wc03_class == 'btn btn-success') {
                    wc03 = 2;
                } else {
                    wc03 = wc03;
                }

                if (mach_wc04_class == 'btn btn-warning') {
                    wc04 = 1;
                } else if (mach_wc04_class == 'btn btn-success') {
                    wc04 = 2;
                } else {
                    wc04 = wc04;
                }

                if (mach_edm_class == 'btn btn-warning') {
                    edm = 1;
                } else if (mach_edm_class == 'btn btn-success') {
                    edm = 2;
                } else {
                    edm = edm;
                }

                if (mach_sg_class == 'btn btn-warning') {
                    sg = 1;
                } else if (mach_sg_class == 'btn btn-success') {
                    sg = 2;
                } else {
                    sg = sg;
                }

                if (mach_oh_class == 'btn btn-warning') {
                    oh = 1;
                } else if (mach_oh_class == 'btn btn-success') {
                    oh = 2;
                } else {
                    oh = oh;
                }

                var myUrl = `http://localhost:3000/api/toolControl/machining/${tool_code}`;
                var myData = {
                    mc01: mc01,
                    mc02: mc02,
                    mc03: mc03,
                    wc01: wc01,
                    wc02: wc02,
                    wc03: wc03,
                    wc04: wc04,
                    edm: edm,
                    sg: sg,
                    oh: oh,
                };

                axios.patch(
                        myUrl, myData, {
                            headers: {
                                'Content-Type': 'application/json',
                                'key': '12345'
                            }
                        })
                    .then(function(response) {
                        console.log(response);
                    })
                    .catch(function(error) {
                        console.log(error);
                    });

            })
            .catch(function(error) {
                console.log(error);
            });

    }

    function updateQualityTool() {
        var quality_tool = $("#quality_tool").find('option').filter(':selected').val();
        var tool_code = $("#tool_code").text();

        var myUrl = `http://localhost:3000/api/toolControl/quality/${tool_code}`;
        var myData = {
            quality_tool: quality_tool
        };
        axios.patch(
                myUrl, myData, {
                    headers: {
                        'Content-Type': 'application/json',
                        'key': '12345'
                    }
                })
            .then(function(response) {
                console.log(response);
            })
            .catch(function(error) {
                console.log(error);
            });
    }

    function updateQualityResult(status) {
        var tool_code = $("#tool_code").text();

        var myUrl = `http://localhost:3000/api/toolControl/result/${tool_code}`;
        var myData = {
            quality_result: status,
            ng_desc: status
        };
        axios.patch(
                myUrl, myData, {
                    headers: {
                        'Content-Type': 'application/json',
                        'key': '12345'
                    }
                })
            .then(function(response) {
                console.log(response);
                window.location = "<?php echo base_url('scan'); ?>";
                location.reload();
            })
            .catch(function(error) {
                console.log(error);
            });
    }

    window.onload = function(e) {
        getLoading();
    }

    $(document).ready(function() {

        $('#load_mc01').click(function(e) {
            if (this.className == 'btn btn-success') {
                $('#load_mc01').removeClass().addClass('btn btn-warning');
            } else if (this.className == 'btn btn-warning') {
                $('#load_mc01').removeClass().addClass('btn btn-success');
            }
        });

        $('#load_wc02').click(function(e) {
            if (this.className == 'btn btn-success') {
                $('#load_wc02').removeClass().addClass('btn btn-warning');
            } else if (this.className == 'btn btn-warning') {
                $('#load_wc02').removeClass().addClass('btn btn-success');
            }
        });

        $('#load_mc02').click(function(e) {
            if (this.className == 'btn btn-success') {
                $('#load_mc02').removeClass().addClass('btn btn-warning');
            } else if (this.className == 'btn btn-warning') {
                $('#load_mc02').removeClass().addClass('btn btn-success');
            }
        });

        $('#load_wc03').click(function(e) {
            if (this.className == 'btn btn-success') {
                $('#load_wc03').removeClass().addClass('btn btn-warning');
            } else if (this.className == 'btn btn-warning') {
                $('#load_wc03').removeClass().addClass('btn btn-success');
            }
        });

        $('#load_mc03').click(function(e) {
            if (this.className == 'btn btn-success') {
                $('#load_mc03').removeClass().addClass('btn btn-warning');
            } else if (this.className == 'btn btn-warning') {
                $('#load_mc03').removeClass().addClass('btn btn-success');
            }
        });

        $('#load_wc04').click(function(e) {
            if (this.className == 'btn btn-success') {
                $('#load_wc04').removeClass().addClass('btn btn-warning');
            } else if (this.className == 'btn btn-warning') {
                $('#load_wc04').removeClass().addClass('btn btn-success');
            }
        });

        $('#load_edm').click(function(e) {
            if (this.className == 'btn btn-success') {
                $('#load_edm').removeClass().addClass('btn btn-warning');
            } else if (this.className == 'btn btn-warning') {
                $('#load_edm').removeClass().addClass('btn btn-success');
            }
        });

        $('#load_sg').click(function(e) {
            if (this.className == 'btn btn-success') {
                $('#load_sg').removeClass().addClass('btn btn-warning');
            } else if (this.className == 'btn btn-warning') {
                $('#load_sg').removeClass().addClass('btn btn-success');
            }
        });

        $('#load_wc01').click(function(e) {
            if (this.className == 'btn btn-success') {
                $('#load_wc01').removeClass().addClass('btn btn-warning');
            } else if (this.className == 'btn btn-warning') {
                $('#load_wc01').removeClass().addClass('btn btn-success');
            }
        });

        $('#load_oh').click(function(e) {
            if (this.className == 'btn btn-success') {
                $('#load_oh').removeClass().addClass('btn btn-warning');
            } else if (this.className == 'btn btn-warning') {
                $('#load_oh').removeClass().addClass('btn btn-success');
            }
        });

        $('#mach_mc01').click(function(e) {
            if (this.className == 'btn btn-success') {
                $('#mach_mc01').removeClass().addClass('btn btn-warning');
            } else if (this.className == 'btn btn-warning') {
                $('#mach_mc01').removeClass().addClass('btn btn-success');
            }
        });

        $('#mach_wc02').click(function(e) {
            if (this.className == 'btn btn-success') {
                $('#mach_wc02').removeClass().addClass('btn btn-warning');
            } else if (this.className == 'btn btn-warning') {
                $('#mach_wc02').removeClass().addClass('btn btn-success');
            }
        });

        $('#mach_mc02').click(function(e) {
            if (this.className == 'btn btn-success') {
                $('#mach_mc02').removeClass().addClass('btn btn-warning');
            } else if (this.className == 'btn btn-warning') {
                $('#mach_mc02').removeClass().addClass('btn btn-success');
            }
        });

        $('#mach_wc03').click(function(e) {
            if (this.className == 'btn btn-success') {
                $('#mach_wc03').removeClass().addClass('btn btn-warning');
            } else if (this.className == 'btn btn-warning') {
                $('#mach_wc03').removeClass().addClass('btn btn-success');
            }
        });

        $('#mach_mc03').click(function(e) {
            if (this.className == 'btn btn-success') {
                $('#mach_mc03').removeClass().addClass('btn btn-warning');
            } else if (this.className == 'btn btn-warning') {
                $('#mach_mc03').removeClass().addClass('btn btn-success');
            }
        });

        $('#mach_wc04').click(function(e) {
            if (this.className == 'btn btn-success') {
                $('#mach_wc04').removeClass().addClass('btn btn-warning');
            } else if (this.className == 'btn btn-warning') {
                $('#mach_wc04').removeClass().addClass('btn btn-success');
            }
        });

        $('#mach_edm').click(function(e) {
            if (this.className == 'btn btn-success') {
                $('#mach_edm').removeClass().addClass('btn btn-warning');
            } else if (this.className == 'btn btn-warning') {
                $('#mach_edm').removeClass().addClass('btn btn-success');
            }
        });

        $('#mach_sg').click(function(e) {
            if (this.className == 'btn btn-success') {
                $('#mach_sg').removeClass().addClass('btn btn-warning');
            } else if (this.className == 'btn btn-warning') {
                $('#mach_sg').removeClass().addClass('btn btn-success');
            }
        });

        $('#mach_wc01').click(function(e) {
            if (this.className == 'btn btn-success') {
                $('#mach_wc01').removeClass().addClass('btn btn-warning');
            } else if (this.className == 'btn btn-warning') {
                $('#mach_wc01').removeClass().addClass('btn btn-success');
            }
        });

        $('#mach_oh').click(function(e) {
            if (this.className == 'btn btn-success') {
                $('#mach_oh').removeClass().addClass('btn btn-warning');
            } else if (this.className == 'btn btn-warning') {
                $('#mach_oh').removeClass().addClass('btn btn-success');
            }
        });

        $("#nextLoading").click(function(e) {
            $('#next1').click();
            updateStatusloading();
            getMachining();
        })

        $("#prevMachining").click(function(e) {
            $("#previous1").click();
            getLoading();
        })

        $("#nextMachining").click(function(e) {
            $('#next2').click();
            updateStatusMachining();
        })

        $("#nextQuality").click(function(e) {
            $('#next3').click();
            updateQualityTool();
        })

        $("#submit_ng").click(function(e) {
            var quality_result = 'NG';
            updateQualityResult(quality_result);
        })

        $("#submit_ok").click(function(e) {
            var quality_result = 'OK';
            updateQualityResult(quality_result);
        })

    });
</script>

<body id="grad1">
    <div class="container-fluid">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-3 pb-0 mt-0 mb-0">
                    <h4 id="tool_code">DT000001</h4>
                    <p id="part_no"></p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <div id="msform">
                                <ul id="progressbar">
                                    <li class="active" id="account">
                                        <strong>Loading <br> Part</strong>
                                    </li>
                                    <li id="personal"><strong>Machining <br> Process</strong></li>
                                    <li id="payment"><strong>Quality <br> Check</strong></li>
                                    <li id="confirm"><strong>Finish <br> Good</strong></li>
                                </ul>

                                <fieldset>
                                    <h5 class="fs-title">Process Queue</h5>
                                    <input type="button" style="display: none" id="next1" class="next" />
                                    <div class="card-body">

                                        <div class="card-process">
                                            <div class="w3-card">
                                                <input type="button" class="btn btn-light" id="load_mc01" value="MC01">
                                            </div>
                                            <div class="w3-card">
                                                <input type="button" class="btn btn-light" id="load_wc02" value="WC02">
                                            </div>
                                        </div>

                                        <div class="card-process">
                                            <div class="w3-card">
                                                <input type="button" class="btn btn-light" id="load_mc02" value="MC02">
                                            </div>
                                            <div class="w3-card">
                                                <input type="button" class="btn btn-light" id="load_wc03" value="WC03">
                                            </div>
                                        </div>

                                        <div class="card-process">
                                            <div class="w3-card">
                                                <input type="button" class="btn btn-light" id="load_mc03" value="MC03">
                                            </div>
                                            <div class="w3-card">
                                                <input type="button" class="btn btn-light" id="load_wc04" value="WC04">
                                            </div>
                                        </div>

                                        <div class="card-process">
                                            <div class="w3-card">
                                                <input type="button" class="btn btn-light" id="load_edm" value="EDM &nbsp;">
                                            </div>
                                            <div class="w3-card">
                                                <input type="button" class="btn btn-light" id="load_sg" value="&nbsp; SG &nbsp;">
                                            </div>
                                        </div>

                                        <div class="card-process">
                                            <div class="w3-card">
                                                <input type="button" class="btn btn-light" id="load_wc01" value="WC01">
                                            </div>
                                            <div class="w3-card">
                                                <input type="button" class="btn btn-light" id="load_oh" value="&nbsp; OH &nbsp;">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-footer">
                                        <button type="button" id="nextLoading" name="next" class="btn btn-primary"> Next </button>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <h3 class="fs-title">Machining Process</h3>
                                    <input type="button" style="display: none" id="previous1" class="previous" />
                                    <input type="button" style="display: none" id="next2" class="next" />
                                    <div class="card-body">

                                        <div class="card-process">
                                            <div class="w3-card">
                                                <input type="button" class="btn btn-light" id="mach_mc01" value="MC01">
                                            </div>
                                            <div class="w3-card">
                                                <input type="button" class="btn btn-light" id="mach_wc02" value="WC02">
                                            </div>
                                        </div>

                                        <div class="card-process">
                                            <div class="w3-card">
                                                <input type="button" class="btn btn-light" id="mach_mc02" value="MC02">
                                            </div>
                                            <div class="w3-card">
                                                <input type="button" class="btn btn-light" id="mach_wc03" value="WC03">
                                            </div>
                                        </div>

                                        <div class="card-process">
                                            <div class="w3-card">
                                                <input type="button" class="btn btn-light" id="mach_mc03" value="MC03">
                                            </div>
                                            <div class="w3-card">
                                                <input type="button" class="btn btn-light" id="mach_wc04" value="WC04">
                                            </div>
                                        </div>

                                        <div class="card-process">
                                            <div class="w3-card">
                                                <input type="button" class="btn btn-light" id="mach_edm" value="EDM &nbsp;">
                                            </div>
                                            <div class="w3-card">
                                                <input type="button" class="btn btn-light" id="mach_sg" value="&nbsp; SG &nbsp;">
                                            </div>
                                        </div>

                                        <div class="card-process">
                                            <div class="w3-card">
                                                <input type="button" class="btn btn-light" id="mach_wc01" value="WC01">
                                            </div>
                                            <div class="w3-card">
                                                <input type="button" class="btn btn-light" id="mach_oh" value="&nbsp; OH &nbsp;">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="card-footer">
                                        <button type="button" id="prevMachining" class="btn btn-danger"> Previous </button>
                                        <button type="button" id="nextMachining" class="btn btn-primary">Next</button>
                                    </div>

                                </fieldset>

                                <fieldset>
                                    <h2 class="fs-title">Check Quality</h2>
                                    <input style="display:none;" id="next3" type="button" class="next" />
                                    <div class="card-body">

                                        <div class="card-process">
                                            <select class="form-control" id="quality_tool">
                                                <option value="manual">Manual</option>
                                                <option value="ccm">CCM</option>
                                                <option value="scan">Scan</option>
                                                <option value="other">Others</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="card-footer">
                                        <button type="button" name="next" id="nextQuality" class="btn btn-primary"> Confirm </button>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Confirmation Quality</h2>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5>QC Result ?</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="button" id="submit_ng" class="btn btn-danger"> NG </button>
                                        <button type="button" id="submit_ok" class="btn btn-success">OK</button>
                                    </div>
                                </fieldset>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/form.wizard.js'); ?>"></script>

</body>

</html>