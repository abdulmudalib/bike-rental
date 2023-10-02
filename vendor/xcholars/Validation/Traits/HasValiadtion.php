<?php

Namespace Xcholars\Validation\Traits;

use Xcholars\Http\Request;

use Xcholars\Validation\Factory;

use Xcholars\Support\Proxies\Response;

trait HasValiadtion
{
    private $validator;

    public function setValidator()
    {
        $this->validator = Factory::makeValidator();
    }

    public function validate(Request $request)
    {
        $this->setValidator();

        $this->validator->check($request->all());

        return $this->validator;
    }

    function isInvalid($requestName, Request $request)
    {
        $validation = $this->validate($request)->for($requestName);

        if ($validation->fails())
        {
            return Response::withError($validation->errors()->first());
        }

        return false;
    }

}
