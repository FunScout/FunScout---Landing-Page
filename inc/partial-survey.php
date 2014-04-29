<?php
global $detect;
?>
<div class="fs-survey hide">
  <div class="age-wrap clearfix">
    <label class="col-sm-10">Please enter your age to verify your raffle eligibility.</label>
    <input class="col-sm-2 age-input" type="number" name="age" class="age" placehoder="18" min="0" max="99">
  </div>

  <ol>
    <li>
      <span>
        <label for="survey-zip">Enter your Zip code.</label>
        <br/>
        <input id="survey-zip" class="survey-zip" name="survey-zip">
      </span>
    </li>
    <li>
      <span>
        <label for="survey-zip">Choose all the activities and event you like.</label>

        <select multiple="" name="e9" id="e9" style="width:75%" class="populate <?php if( !$detect->isMobile() && $detect->isTablet() ): ?>select2 select2-offscreen<?php endif; ?>" tabindex="-1">
          <optgroup label="Entertainment">
            <option>Live Music</option>
            <option>Comedy Shows</option>
            <option>Nightlife & Parties</option>
            <option>Movies</option>
            <option>Sporting Events</option>
            <option>Fun & Games</option>
          </optgroup>
          <optgroup label="Food & Drinks">
            <option>Happy Hours</option>
            <option>Special Eats & Drinks</option>
            <option>Classes</option>
          </optgroup>
          <optgroup label="Arts & Culture">
            <option>Exhibits & Galleries</option>
            <option>Performing Arts</option>
            <option>Classes</option>
          </optgroup>
          <optgroup label="Active & Outdoors">
            <option>Outdoor Activities</option>
            <option>Sports & Fitness</option>
            <option>Nature</option>
            <option>Appreciation</option>
          </optgroup>
          <optgroup label="Community">
            <option>Fairs & Festivals</option>
            <option>Good Causes</option>
            <option>Tours</option>
          </optgroup>
            </select>
                      </span></li>
                  <li>
                    <span>
                      <label for="survey-find">Select the ways you currently find fun events and activities.</label>
                      <select multiple="" name="e9" style="width:75%" class="populate <?php if( !$detect->isMobile() && $detect->isTablet() ): ?>select2 select2-offscreen<?php endif; ?>" tabindex="-1">
                          <option>Word of Mouth</option>
                          <option>Online Search</option>
                          <option>Discount/Deal Website</option>
                          <option>Apps</option>
                          <option>Newspaper</option>
                          <option>Television</option>
                          <option>Radio</option>
                          <option>Facebook</option>
                          <option>Other</option>
          </select>
        </span>
      </li>
    </ol>
    <div class="col-md-12 suvey-submit"><button type="button" class="btn btn-primary">Submit</button></div>
</div><!-- .fs-survey -->