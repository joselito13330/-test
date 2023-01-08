<?php
namespace App\Repositories\Admin;

use App\Models\Admin\Document;

class DocumentRepository extends DocumentResourceRepository
{
  public function __construct(Document $document)
	{
		$this->model = $document;
	}
}