<?php namespace App\Page;

use Illuminate\Pagination\BootstrapThreePresenter;

class CustomPagination extends BootstrapThreePresenter {

//<li><a href="#">&laquo;</a></li>
//<li><a href="#">1</a></li>
//<li><span>2</span></li>
//<li><a href="#">3</a></li>
//<li><a href="#">4</a></li>
//<li><a href="#">5</a></li>
//<li><a href="#">&raquo;</a></li>



//<ul class="uk-pagination uk-margin-medium-top uk-margin-medium-bottom">
//<li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
//<li class="uk-active"><span>1</span></li>
//<li><a href="#">2</a></li>
//<li><a href="#">3</a></li>
//<li><a href="#">4</a></li>
//<li><span>…</span></li>
//<li><a href="#">20</a></li>
//<li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
//</ul>


    public function getActivePageWrapper($text)
    {
        return '<li class="uk-active"><span>'.$text.'</span></li>';
    }

    public function getDisabledTextWrapper($text)
    {
        return '<li class="uk-disabled"><a href="#">'.$text.'</a></li>';
    }

    public function getAvailablePageWrapper($url, $page, $rel = null)
    {
        return '<li ><a href="'.$url.'">'.$page.'</a></li>';
    }

    public function render()
    {
        if ($this->hasPages())
        {
            return sprintf(
                '%s %s %s',
                $this->getPreviousButton(),
                $this->getLinks(),
                $this->getNextButton()
            );
        }

        return '';
    }

}