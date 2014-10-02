<?php

class ContactController extends BaseController {

	public function submitAction() {

		$sanitized = array();

		foreach (Input::all() as $key => $string) {
			$sanitized[$key] = $this->inputSanitize($string);
		}

		$rules = array(
			'name' => 'required',
			'email' => 'email',
			'message' => 'required'
		);

		$validator = Validator::make($sanitized,$rules);

		if($validator->fails()) {
			return View::make('contact');
		}

		$formatted_email_message = wordwrap($sanitized['message'], 70, "\r\n").'<br /> From:'.$sanitized['name'].'<br />Reply to:'.$sanitized['email'];
		//generate email 
		//
		mail('uberfleas@gmail.com', 'Message from '.$sanitized['name'], $formatted_email_message);
		//
		//send email
		//
		//redirect to home page with message
		return Redirect::to('/');
	}

	private function inputSanitize($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

}