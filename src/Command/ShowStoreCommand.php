<?php

namespace App\Command;

use App\Formatter\OutputFormatter\StoreFormatter;
use App\Repository\StoredItemRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ShowStoreCommand extends Command
{
    /**
     * @var StoredItemRepository
     */
    private $storeRepository;

    /**
     * @var StoreFormatter
     */
    private $formatter;

    public function __construct(StoredItemRepository $storeRepository, StoreFormatter $formatter, $name = null)
    {
        parent::__construct($name);

        $this->storeRepository = $storeRepository;
        $this->formatter = $formatter;
    }

    public function configure()
    {
        $this->setName('print:store')
            ->setDescription('Show items in store. Require userId')
            ->addArgument('userId', InputArgument::REQUIRED);
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $userId = $input->getArgument('userId');

        if (!$userId) {
            $output->writeln('<error>Unknown userId</error>');

            return;
        }

        $store = $this->storeRepository->findBy(['userId' => $userId]);

        if (!$store) {
            $output->writeln('Store is empty');

            return;
        }

        $this->formatter->setOutput($output);
        $this->formatter->format($store);
    }
}