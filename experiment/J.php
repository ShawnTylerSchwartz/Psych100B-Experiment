<?php include('bls_group_3.php'); ?>
    
    // BLS Group J-3-2 (NW_F_SFSU, OW_M_UCB, NW_M_CSUN, OW_F_STAN)

    function random() {
      var x = Math.random();
      return x;
    };
    
    var bls_output = "BLS_GROUP_J-3-2-";
    var rand_output = random();
    var the_dot = ".";
    var csv_name = "csv";
    
    var starRaymond = bls_output + rand_output + the_dot + csv_name;
    
    function saveData(filename, filedata){
      $.ajax({
        type:'post',
        cache: false,
        url: 'save_data.php', // this is the path to the above PHP script
        data: {filename: filename, filedata: filedata}
      });
    };

    jsPsych.init({
      display_element: $('#jspsych-target'),
      timeline: [intro_instructions_block, consent_block, questions_block_one, questions_block_two, questions_block_three, questions_block_four, questions_block_five, questions_block_six, questions_block_seven, likert_block_one, likert_block_two, likert_block_three, likert_block_four, post_survey_instructions_block, resume_female_normalweight, likert_resume_one, likert_resume_two, likert_resume_three, likert_resume_four, likert_resume_five, likert_resume_six, nw_f_suitability, resume_male_overweight, likert_resume_one, likert_resume_two, likert_resume_three, likert_resume_four, likert_resume_five, likert_resume_six, ow_m_suitability, resume_male_normalweight, likert_resume_one, likert_resume_two, likert_resume_three, likert_resume_four, likert_resume_five, likert_resume_six, nw_m_suitability, resume_female_overweight, likert_resume_one, likert_resume_two, likert_resume_three, likert_resume_four, likert_resume_five, likert_resume_six, ow_f_suitability],
      on_finish: function(data){ saveData(starRaymond, jsPsych.data.dataAsCSV()); }
    });
  </script>

</html>