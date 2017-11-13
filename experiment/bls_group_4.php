<!doctype html>
<html>
  <head>
    <script src="src/js/jquery.min.js"></script>
    <script src="src/js/jquery-ui.min.js"></script>
    <script src="src/jspsych.js"></script>
    <script src="src/plugins/jspsych-instructions.js"></script>
    <script src="src/plugins/jspsych-html.js"></script>
    <script src="src/plugins/jspsych-survey-text.js"></script>
    <script src="src/plugins/jspsych-survey-multi-choice.js"></script>
    <script src="src/plugins/jspsych-survey-likert.js"></script>
    <script src="src/plugins/jspsych-similarity.js"></script>
    <script src="src/plugins/jspsych-competence.js"></script>
    <script src="src/plugins/jspsych-suitability.js"></script>
    <script src="src/plugins/jspsych-text.js"></script>
    <link rel="stylesheet" href="src/css/jquery-ui.css"></link>
    <link rel="stylesheet" href="src/css/jspsych.css"></link>
  </head>

  <body>
    <div id="jspsych-target"></div>
  </body>
  
  <script>
    var intro_instructions_block = {
      type: 'instructions',
      pages: [
        'Welcome to the C.A.S. Psych 100B Experiment. When ready, click next to begin.',
        'You will begin by answering a series of questions.',
        'Your complete honesty in your answers is important for the validity of this study.',
        'Please turn off all cell phones and distracting materials. Are you ready? Click Next Now.'
      ],
      show_clickable_nav: true
    }

    var check_consent = function(elem) {
      if ($('#consent_checkbox').is(':checked')) {
        return true;
      } else {
        alert("If you agree to all of the instructions presented wish to participate in our Psych 100B Experiment, you must check the box next to the statement 'I agree to participate in this Psych 100B Experiment.'");
        return false;
      }
      return false;
    };

    var consent_block = {
      "type": "html",
      "force_refresh": true,
      "url": "src/external_html/simple_consent.html",
      "cont_btn": "start",
      "check_fn": check_consent
    }

    // All Question Set Arrays - Demographic Question Sets
    var block_one_questions = [ "Age", "How many years have you been in college?", "What is your major?" ];
    var block_two_questions = [ "Gender", "Race/Ethnicity" ];
    var block_three_questions = [ "Do you have a job?" ];
    var block_four_questions = [ "What is your pay rate in dollars per hour? (*Enter Number Only or N/A*)", "How many hours a week do you work? (*Enter Number Only or N/A*)" ];
    var block_five_questions = [ "Have you eaten breakfast today?" ];
    var block_six_questions = [ "When did you last have caffeine?" ];
    var block_seven_questions = [ "How many hours did you sleep last night?" ];

    // All Question Scales
    var gender_options = [ "Male", "Female", "Other" ];
    var race_options = [ "White", "Hispanic/Latino", "African American", "American Indian", "Asian", "Other" ];
    var yn_options = [ "Yes", "No" ];
    var caf_options = [ "This Morning", "Yesterday Evening", "Yesterday Afternoon", "Yesterday Morning", "I haven't consumed caffeine in the last 48 hours." ];
    var sleep_options = [ "0-2 Hours", "2-4 Hours", "4-6 Hours", "6-8 Hours", "8 or more Hours" ];

    // Likert Question Scaling Sets - After the Demographic Question Sets
    var happiness_scale_questions = [ "I am happy today." ];
    var comfort_scale_questions = [ "I am comfortable at this moment in time." ];
    var behere_scale_questions = [ "I would rather be somewhere else." ];
    var judgemental_scale_question = [ "I follow the latest fashion trends." ];
    var level_of_agreement_scale = [ "Strongly Disagree", "Disagree", "Somewhat Disagree", "Neither Agree Nor Disagree", "Somehwat Agree", "Agree", "Strongly Agree" ];

    var questions_block_one = {
      type: 'survey-text',
      questions: block_one_questions
    };

    var questions_block_two = {
      type: 'survey-multi-choice',
      questions: block_two_questions,
      options: [gender_options, race_options],
      required: [true, true]
    };
    
    var questions_block_three = {
      type: 'survey-multi-choice',
      questions: block_three_questions,
      options: [yn_options],
      required: [true]
    };
    
    var questions_block_four = {
      type: 'survey-text',
      questions: block_four_questions
    };
    
    var questions_block_five = {
      type: 'survey-multi-choice',
      questions: block_five_questions,
      options: [yn_options],
      required: [true]
    };
    
    var questions_block_six = {
      type: 'survey-multi-choice',
      questions: block_six_questions,
      options: [caf_options],
      required: [true]
    };
    
    var questions_block_seven = {
      type: 'survey-multi-choice',
      questions: block_seven_questions,
      options: [sleep_options],
      required: [true]
    };
    
    var likert_block_one = {
      type: 'survey-likert',
      questions: happiness_scale_questions,
      labels: [level_of_agreement_scale]
    };
    
    var likert_block_two = {
      type: 'survey-likert',
      questions: comfort_scale_questions,
      labels: [level_of_agreement_scale]
    };
    
    var likert_block_three = {
      type: 'survey-likert',
      questions: behere_scale_questions,
      labels: [level_of_agreement_scale]
    };
    
    var likert_block_four = {
      type: 'survey-likert',
      questions: judgemental_scale_question,
      labels: [level_of_agreement_scale]
    };
    
    var post_survey_instructions_block = {
      type: 'instructions',
      pages: [
        'You are now finished with the questions. Click next to continue.',
        'You are the hiring manager at the <strong>McGullin Law Firm</strong>, one of the most reputable law firms in all of Southern California. You are looking for someone to replace one of your star employees who is preparing to retire later this year. You are hoping that this new employee will live up to the standards that your soon-to-be retired employee has set throughout their time at the firm. Click next to continue.',
        'You have received the Curriculum Vitae\'s (CV\'s) of four applicants.',
        'When you are done reviewing the resume, click next. You will not be able to go back to the resume after you click next.',
        'Are you ready? You will now be presented with a resume for a job applicant to your <strong>law firm</strong>.'
      ],
      show_clickable_nav: true
    };
    
    // Stimulus Resume Likert Question Scaling Sets
    var teamwork_ability = [ "How likely is this applicant to work well with a team?" ];
    var social_competence = [ "How likely is this applicant to be socially competent?" ];
    var job_efficiency = [ "How likely is this applicant to be efficient in the workplace?" ];
    var intelligence = [ "How likely is it that this applicant is intelligent?" ];
    var motivation = [ "How likely is it that this applicant is motivated?" ];
    var leadership_skills = [ "How likely is it that this appicant has leadership skills?" ];
    var likely_scale = [ "Extremely Unlikely", "Unlikely", "Neutral", "Likely", "Extremely Likely" ];
    
    // NW_M_STAN
    var resume_male_normalweight = {
      type: 'instructions',
      pages: [
        '<iframe src="https://psych.shawntylerschwartz.com/psych100b/experiment/src/resumes/BLS_Group_4/NW_M_STAN.php" width="100%" height="1850px" frameborder="0" scrolling="auto" />',
        'You will now answer some questions regarding the resume that you just read. Click next to continue.'
      ],
      show_clickable_nav: true
    };
    
    // NW_F_CSUN
    var resume_female_normalweight = {
      type: 'instructions',
      pages: [
        '<iframe src="https://psych.shawntylerschwartz.com/psych100b/experiment/src/resumes/BLS_Group_4/NW_F_CSUN.php" width="100%" height="1850px" frameborder="0" scrolling="auto" />',
        'You will now answer some questions regarding the resume that you just read. Click next to continue.'
      ],
      show_clickable_nav: true
    };
    
    // OW_F_UCB
    var resume_female_overweight = {
      type: 'instructions',
      pages: [
        '<iframe src="https://psych.shawntylerschwartz.com/psych100b/experiment/src/resumes/BLS_Group_4/OW_F_UCB.php" width="100%" height="1850px" frameborder="0" scrolling="auto" />',
        'You will now answer some questions regarding the resume that you just read. Click next to continue.'
      ],
      show_clickable_nav: true
    };
    
    // OW_M_SFSU
    var resume_male_overweight = {
      type: 'instructions',
      pages: [
        '<iframe src="https://psych.shawntylerschwartz.com/psych100b/experiment/src/resumes/BLS_Group_4/OW_M_SFSU.php" width="100%" height="1850px" frameborder="0" scrolling="auto" />',
        'You will now answer some questions regarding the resume that you just read. Click next to continue.'
      ],
      show_clickable_nav: true
    };
    
    var likert_resume_one = {
      type: 'survey-likert',
      questions: teamwork_ability,
      labels: [likely_scale]
    };
    
    var likert_resume_two = {
      type: 'survey-likert',
      questions: social_competence,
      labels: [likely_scale]
    };
    
    var likert_resume_three = {
      type: 'survey-likert',
      questions: job_efficiency,
      labels: [likely_scale]
    };
    
    var likert_resume_four = {
      type: 'survey-likert',
      questions: intelligence,
      labels: [likely_scale]
    };
    
    var likert_resume_five = {
      type: 'survey-likert',
      questions: motivation,
      labels: [likely_scale]
    };
    
    var likert_resume_six = {
      type: 'survey-likert',
      questions: leadership_skills,
      labels: [likely_scale]
    };
    
    var nw_m_competence = {
      type: 'competence',
      stimuli: ['src/resumes/stimuli/NW_M_JohnCurtis.jpg', 'src/resumes/stimuli/NW_M_JohnCurtis.jpg'],
      prompt: '<p class="center-content">Overall, how competent is this applicant for the job?</p>'
    };
    
    var nw_m_suitability = {
      type: 'suitability',
      stimuli: ['src/resumes/stimuli/NW_M_JohnCurtis.jpg', 'src/resumes/stimuli/NW_M_JohnCurtis.jpg'],
      prompt: '<p class="center-content">Overall, how suitable is this applicant for the job?</p>'
    };
    
    var ow_m_competence = {
      type: 'competence',
      stimuli: ['src/resumes/stimuli/OW_M_JakeCooper.jpg', 'src/resumes/stimuli/OW_M_JakeCooper.jpg'],
      prompt: '<p class="center-content">Overall, how competent is this applicant for the job?</p>'
    };
    
    var ow_m_suitability = {
      type: 'suitability',
      stimuli: ['src/resumes/stimuli/OW_M_JakeCooper.jpg', 'src/resumes/stimuli/OW_M_JakeCooper.jpg'],
      prompt: '<p class="center-content">Overall, how suitable is this applicant for the job?</p>'
    };
    
    var nw_f_competence = {
      type: 'competence',
      stimuli: ['src/resumes/stimuli/NW_F_JaneConner.jpg', 'src/resumes/stimuli/NW_F_JaneConner.jpg'],
      prompt: '<p class="center-content">Overall, how competent is this applicant for the job?</p>'
    };
    
    var nw_f_suitability = {
      type: 'suitability',
      stimuli: ['src/resumes/stimuli/NW_F_JaneConner.jpg', 'src/resumes/stimuli/NW_F_JaneConner.jpg'],
      prompt: '<p class="center-content">Overall, how suitable is this applicant for the job?</p>'
    };
    
    var ow_f_competence = {
      type: 'competence',
      stimuli: ['src/resumes/stimuli/OW_F_JillCarter.jpg', 'src/resumes/stimuli/OW_F_JillCarter.jpg'],
      prompt: '<p class="center-content">Overall, how competent is this applicant for the job?</p>'
    };
    
    var ow_f_suitability = {
      type: 'suitability',
      stimuli: ['src/resumes/stimuli/OW_F_JillCarter.jpg', 'src/resumes/stimuli/OW_F_JillCarter.jpg'],
      prompt: '<p class="center-content">Overall, how suitable is this applicant for the job?</p>'
    };