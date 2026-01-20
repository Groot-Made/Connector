import { ScrollArea, ScrollBar } from '@/components/ui/scroll-area';
import { siteConfig } from '@/config/site';
import useTheme from '@/hooks/use-theme';
import { Link } from 'react-router-dom';
import { SidebarNav } from './SidebarNav';

type Props = {
	showLogo?: boolean;
};

export function Sidebar({ showLogo = true }: Props) {
	const { effectiveTheme } = useTheme();
	const logo = siteConfig.logo?.[effectiveTheme];
	const initials = siteConfig.name
		.split(' ')
		.map((word) => word[0])
		.join('')
		.slice(0, 2)
		.toUpperCase();
	return (
		<aside className="flex h-full w-full flex-col">
			{showLogo && (
				<div className="px-3 py-4">
					<Link
						to="/"
						className="flex items-center gap-3 rounded-lg px-2 py-1 text-left hover:bg-muted/60"
					>
						<div className="flex h-10 w-10 items-center justify-center rounded-lg ">
							{logo ? (
								<img
									src={logo}
									alt={siteConfig.name}
									className="h-8 w-8 object-contain"
								/>
							) : (
								<span className="text-sm font-semibold text-foreground">
									{initials}
								</span>
							)}
						</div>
						<div className="flex flex-col leading-tight">
							<span className="text-base font-semibold text-foreground">
								{siteConfig.name}
							</span>
							<span className="text-xs text-muted-foreground">
								Plugin
							</span>
						</div>
					</Link>
				</div>
			)}

			<ScrollArea className="flex-1">
				<div className="h-full w-full py-2">
					<SidebarNav />
					<ScrollBar orientation="vertical" />
				</div>
			</ScrollArea>
		</aside>
	);
}
