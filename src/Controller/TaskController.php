<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\TaskRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use function json_decode;

class TaskController extends AbstractController
{
    #[Route('/tasks', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $id = json_decode($request->getContent())['id'];

        return new JsonResponse(
            [
                'id' => $id,
            ],
        );
    }
}
