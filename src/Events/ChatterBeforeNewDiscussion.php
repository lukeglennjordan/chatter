<?php

namespace DevDojo\Chatter\Events;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class ChatterBeforeNewDiscussion
{
    /**
     * @var Request
     */
    public $request;

    /**
     * @var Validator
     */
    public $validator;

    /**
     * Constructor.
     *
     * @param Request   $request
     * @param Validator $validator
     */
    public function __construct(Request $request, $validator)
    {
        $this->request = $request;
        $this->validator = $validator;
    }
}
