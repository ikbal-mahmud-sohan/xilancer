<script>
    (function ($){
        "use strict";

        $(document).ready(function(){
            $(document).on('click','.load_more_data',function(e) {
                e.preventDefault()
                let pageIndex = Number($(this).attr("data-page-id"));
                let pagination_limit = Number($(this).attr("data-pagination-limit"));
                let countReview = Number($(this).attr("data-review-count"));
                let projectId = $(this).attr("data-project-id");
                //now calculate pageIndex with pagination like this pagination_limit * page_index
                let newPageIndex = pageIndex + 1
                let calculatePagination = newPageIndex * pagination_limit;

                if(calculatePagination <= countReview){
                    load_more(newPageIndex, projectId);
                    $(this).attr("data-page-id", newPageIndex)
                    setTimeout(() => {
                        if(calculatePagination >= countReview) $(this).remove();
                    }, 500)

                    return ;
                }

                $(this).remove();
            })
            function load_more(page, projectId){
                $.ajax({
                    url:"<?php echo e(route('project.review.load.more').'?page='); ?>" + page + "&project_id=" + projectId,
                    method:'GET',
                    success:function(res){
                         $('.project-reviews').append(res)
                    }

                });
            }
        });

    }(jQuery));
</script>
<?php /**PATH /Users/mac/Desktop/Laravel/xilancer-v2.9.0/core/resources/views/frontend/pages/project-details/load-more-js.blade.php ENDPATH**/ ?>