<?php

/**
 * - Please explain the purpose of "recursive" in CakePHP
 * - CakePHP has a default recursive to 1 (meaning it fetch the belongsTo, hasOne and hasMany association).
 * According to the code below, what could happen with lot of entries in the database ?
 */

class ReviewModel extends AppModel{
    
    public $belongsTo = array(
        'Place'
    );

    public $hasMany = array(
        'Answer'
    );
    
    /**
     * Return all reviews 
     */
    public function getReviews(){
        return $this->find('all', array(
            'fields' => array(
                'Review.id', 'Review.rate', 'Review.comment', 'Review.created'
            )
        ));
    }
}