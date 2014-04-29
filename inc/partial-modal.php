<!-- Modal -->
<div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div class="main row">
            <div class="msg col-md-12 hide">
                <p>You are on the list! Would you like a free ticket to our $1000 raffle* by sharing FunScout with your friends or taking our 3 question survey?</p>
            </div>
            <div class="option buy col-md-12" data-option="buy">
                <p class="center">Purchase a $5 ticket by contacting a FunScout team member or get a free ticket by sharing FunScout with your friends or taking our 3 question survey!</p>
            </div><!-- .option -->
            <div class="option social-share col-md-6 col-sm-6 col-xs-6" data-option="share">
                <h3><a class="fb" href="#">Share FunScout</a></h3>
                <a class="fb" href="#">
                    <img src="img/Free-Ticket-Icon---Orange-2.png" width="174" />
                </a>
                <div class="social-share">
                    <a class="fb ir" href="#">
                        <img src="img/share-fb.png" alt="Share FunScout on Facebook" />
                    </a>
                    <a class="tw ir" href="http://twitter.com/intent/tweet?text=I%27m+now+on+the+waiting+list+for+FunScout%2C+a+new+Website%2FApp+that+finds+local+events+%26+activities+for+you%21+http%3A%2F%2Fbit.ly%2F1ji95e3">
                        <img src="img/share-tw.png" alt="Tweet FunScout" />
                    </a>
                </div>
            </div><!-- .option -->
            <div class="option survey col-md-6 col-sm-6 col-xs-6" data-option="survey">
                <h3><a href="#">Quick Survey</a></h3>
                <a href="#"><img src="img/Free-Ticket-Icon---Blue-2.png" width="174" /></a>
                <p>Click here to take our quick 3 question survey for a free ticket!</p>
            </div><!-- .option -->
            <?php require_once 'partial-survey.php'; ?>
        </div><!-- .row -->
        <div class="secondary row hide">
            
        </div>
      </div><!-- .modal-body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>