<?php include('bls_group_3.php'); ?>
    
    // BLS Group I-3-1 (NW_M_CSUN, NW_F_SFSU, OW_F_STAN, OW_M_UCB)

    var seed = 1;
    function random() {
      var x = Math.sin(seed++) * 10000;
      return x - Math.floor(x);
    };
    
    var bls_output = "BLS_GROUP_I-3-1-";
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
      timeline: [intro_instructions_block, consent_block, questions_block_one, questions_block_two, questions_block_three, questions_block_four, questions_block_five, questions_block_six, questions_block_seven, likert_block_one, likert_block_two, likert_block_three, likert_block_four, post_survey_instructions_block, resume_male_normalweight, likert_resume_one, likert_resume_two, likert_resume_three, likert_resume_four, likert_resume_five, likert_resume_six, nw_m_competence, nw_m_suitability, resume_female_normalweight, likert_resume_one, likert_resume_two, likert_resume_three, likert_resume_four, likert_resume_five, likert_resume_six, nw_f_competence, nw_f_suitability, resume_female_overweight, likert_resume_one, likert_resume_two, likert_resume_three, likert_resume_four, likert_resume_five, likert_resume_six, ow_f_competence, ow_f_suitability, resume_male_overweight, likert_resume_one, likert_resume_two, likert_resume_three, likert_resume_four, likert_resume_five, likert_resume_six, ow_m_competence, ow_m_suitability],
      on_finish: function(data){ saveData(starRaymond, jsPsych.data.dataAsCSV()); }
    });
  </script>

</html>